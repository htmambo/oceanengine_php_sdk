<?php

/**
 * 本文件由 go2php 生成，源: api_brand_creative_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 品牌创意删除
 */
class ApiOpenApiV30BrandCreativeDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCreativeDeleteV30Request $brandCreativeDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCreativeDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCreativeDeleteV30Request(\Oceanengine\Models\BrandCreativeDeleteV30Request $brandCreativeDeleteV30Request): self
    {
        $this->brandCreativeDeleteV30Request = $brandCreativeDeleteV30Request;
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
     * 品牌创意删除
     */
    public function execute(): \Oceanengine\Models\BrandCreativeDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCreativeDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/creative/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCreativeDeleteV30Response::class);

        return $result['model'];
    }
}
