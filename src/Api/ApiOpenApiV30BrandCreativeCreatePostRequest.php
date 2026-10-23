<?php

/**
 * 本文件由 go2php 生成，源: api_brand_creative_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌广告创意创建接口
 */
class ApiOpenApiV30BrandCreativeCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCreativeCreateV30Request $brandCreativeCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCreativeCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCreativeCreateV30Request(\Oceanengine\Models\BrandCreativeCreateV30Request $brandCreativeCreateV30Request): self
    {
        $this->brandCreativeCreateV30Request = $brandCreativeCreateV30Request;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * AD品牌广告创意创建接口
     */
    public function execute(): \Oceanengine\Models\BrandCreativeCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCreativeCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/creative/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCreativeCreateV30Response::class);

        return $result['model'];
    }
}
