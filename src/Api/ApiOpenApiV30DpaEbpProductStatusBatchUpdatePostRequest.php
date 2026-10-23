<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_status_batch_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP批量修改DPA商品状态
 */
class ApiOpenApiV30DpaEbpProductStatusBatchUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaEbpProductStatusBatchUpdateV30Request $dpaEbpProductStatusBatchUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpProductStatusBatchUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaEbpProductStatusBatchUpdateV30Request(\Oceanengine\Models\DpaEbpProductStatusBatchUpdateV30Request $dpaEbpProductStatusBatchUpdateV30Request): self
    {
        $this->dpaEbpProductStatusBatchUpdateV30Request = $dpaEbpProductStatusBatchUpdateV30Request;
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
     * EBP批量修改DPA商品状态
     */
    public function execute(): \Oceanengine\Models\DpaEbpProductStatusBatchUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaEbpProductStatusBatchUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/product_status/batch_update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpProductStatusBatchUpdateV30Response::class);

        return $result['model'];
    }
}
