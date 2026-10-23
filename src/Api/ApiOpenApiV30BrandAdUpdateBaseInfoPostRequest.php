<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ad_update_base_info_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑基础信息
 */
class ApiOpenApiV30BrandAdUpdateBaseInfoPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandAdUpdateBaseInfoV30Request $brandAdUpdateBaseInfoV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandAdUpdateBaseInfoV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandAdUpdateBaseInfoV30Request(\Oceanengine\Models\BrandAdUpdateBaseInfoV30Request $brandAdUpdateBaseInfoV30Request): self
    {
        $this->brandAdUpdateBaseInfoV30Request = $brandAdUpdateBaseInfoV30Request;
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
     * 编辑基础信息
     */
    public function execute(): \Oceanengine\Models\BrandAdUpdateBaseInfoV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandAdUpdateBaseInfoV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ad/update_base_info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandAdUpdateBaseInfoV30Response::class);

        return $result['model'];
    }
}
