<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP新建通用版商品
 */
class ApiOpenApiV30DpaEbpProductCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaEbpProductCreateV30Request $dpaEbpProductCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpProductCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaEbpProductCreateV30Request(\Oceanengine\Models\DpaEbpProductCreateV30Request $dpaEbpProductCreateV30Request): self
    {
        $this->dpaEbpProductCreateV30Request = $dpaEbpProductCreateV30Request;
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
     * EBP新建通用版商品
     */
    public function execute(): \Oceanengine\Models\DpaEbpProductCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaEbpProductCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/product/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpProductCreateV30Response::class);

        return $result['model'];
    }
}
