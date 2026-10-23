<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_cancel_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌2.0取消删除预订单
 */
class ApiOpenApiV30BrandOrderCancelDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandOrderCancelDeleteV30Request $brandOrderCancelDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandOrderCancelDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandOrderCancelDeleteV30Request(\Oceanengine\Models\BrandOrderCancelDeleteV30Request $brandOrderCancelDeleteV30Request): self
    {
        $this->brandOrderCancelDeleteV30Request = $brandOrderCancelDeleteV30Request;
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
     * AD品牌2.0取消删除预订单
     */
    public function execute(): \Oceanengine\Models\BrandOrderCancelDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandOrderCancelDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/order/cancel_delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandOrderCancelDeleteV30Response::class);

        return $result['model'];
    }
}
