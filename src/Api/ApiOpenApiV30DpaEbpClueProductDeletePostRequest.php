<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP删除升级版商品
 */
class ApiOpenApiV30DpaEbpClueProductDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaEbpClueProductDeleteV30Request $dpaEbpClueProductDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpClueProductDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaEbpClueProductDeleteV30Request(\Oceanengine\Models\DpaEbpClueProductDeleteV30Request $dpaEbpClueProductDeleteV30Request): self
    {
        $this->dpaEbpClueProductDeleteV30Request = $dpaEbpClueProductDeleteV30Request;
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
     * EBP删除升级版商品
     */
    public function execute(): \Oceanengine\Models\DpaEbpClueProductDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaEbpClueProductDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/clue_product/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpClueProductDeleteV30Response::class);

        return $result['model'];
    }
}
