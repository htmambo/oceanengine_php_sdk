<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_offline_product_batch_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持adv批量删除商品库下的商品
 */
class ApiOpenApiV30DpaOfflineProductBatchDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaOfflineProductBatchDeleteV30Request $dpaOfflineProductBatchDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaOfflineProductBatchDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaOfflineProductBatchDeleteV30Request(\Oceanengine\Models\DpaOfflineProductBatchDeleteV30Request $dpaOfflineProductBatchDeleteV30Request): self
    {
        $this->dpaOfflineProductBatchDeleteV30Request = $dpaOfflineProductBatchDeleteV30Request;
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
     * 支持adv批量删除商品库下的商品
     */
    public function execute(): \Oceanengine\Models\DpaOfflineProductBatchDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaOfflineProductBatchDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/offline_product_batch/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaOfflineProductBatchDeleteV30Response::class);

        return $result['model'];
    }
}
