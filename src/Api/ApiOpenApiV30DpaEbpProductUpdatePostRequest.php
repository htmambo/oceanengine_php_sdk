<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP编辑通用版商品库商品
 */
class ApiOpenApiV30DpaEbpProductUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaEbpProductUpdateV30Request $dpaEbpProductUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpProductUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaEbpProductUpdateV30Request(\Oceanengine\Models\DpaEbpProductUpdateV30Request $dpaEbpProductUpdateV30Request): self
    {
        $this->dpaEbpProductUpdateV30Request = $dpaEbpProductUpdateV30Request;
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
     * EBP编辑通用版商品库商品
     */
    public function execute(): \Oceanengine\Models\DpaEbpProductUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaEbpProductUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/product/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpProductUpdateV30Response::class);

        return $result['model'];
    }
}
