<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑预定单
 */
class ApiOpenApiV30BrandOrderUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandOrderUpdateV30Request $brandOrderUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandOrderUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandOrderUpdateV30Request(\Oceanengine\Models\BrandOrderUpdateV30Request $brandOrderUpdateV30Request): self
    {
        $this->brandOrderUpdateV30Request = $brandOrderUpdateV30Request;
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
     * 编辑预定单
     */
    public function execute(): \Oceanengine\Models\BrandOrderUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandOrderUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/order/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandOrderUpdateV30Response::class);

        return $result['model'];
    }
}
