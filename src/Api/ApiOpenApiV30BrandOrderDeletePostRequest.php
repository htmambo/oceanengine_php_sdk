<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌2.0删除预订单
 */
class ApiOpenApiV30BrandOrderDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandOrderDeleteV30Request $brandOrderDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandOrderDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandOrderDeleteV30Request(\Oceanengine\Models\BrandOrderDeleteV30Request $brandOrderDeleteV30Request): self
    {
        $this->brandOrderDeleteV30Request = $brandOrderDeleteV30Request;
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
     * AD品牌2.0删除预订单
     */
    public function execute(): \Oceanengine\Models\BrandOrderDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandOrderDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/order/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandOrderDeleteV30Response::class);

        return $result['model'];
    }
}
