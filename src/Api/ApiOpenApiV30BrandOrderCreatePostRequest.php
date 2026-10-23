<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建预定单
 */
class ApiOpenApiV30BrandOrderCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandOrderCreateV30Request $brandOrderCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandOrderCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandOrderCreateV30Request(\Oceanengine\Models\BrandOrderCreateV30Request $brandOrderCreateV30Request): self
    {
        $this->brandOrderCreateV30Request = $brandOrderCreateV30Request;
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
     * 创建预定单
     */
    public function execute(): \Oceanengine\Models\BrandOrderCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandOrderCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/order/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandOrderCreateV30Response::class);

        return $result['model'];
    }
}
