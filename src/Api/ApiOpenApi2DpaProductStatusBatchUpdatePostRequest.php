<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_product_status_batch_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口用于批量修改DPA商品状态
 */
class ApiOpenApi2DpaProductStatusBatchUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaProductStatusBatchUpdateV2Request $dpaProductStatusBatchUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaProductStatusBatchUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaProductStatusBatchUpdateV2Request(\Oceanengine\Models\DpaProductStatusBatchUpdateV2Request $dpaProductStatusBatchUpdateV2Request): self
    {
        $this->dpaProductStatusBatchUpdateV2Request = $dpaProductStatusBatchUpdateV2Request;
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
     * 此接口用于批量修改DPA商品状态
     */
    public function execute(): \Oceanengine\Models\DpaProductStatusBatchUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaProductStatusBatchUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/product_status/batch_update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaProductStatusBatchUpdateV2Response::class);

        return $result['model'];
    }
}
