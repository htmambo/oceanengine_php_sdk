<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_save_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP创建/编辑升级版商品
 */
class ApiOpenApiV30DpaEbpClueProductSavePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaEbpClueProductSaveV30Request $dpaEbpClueProductSaveV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpClueProductSaveV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaEbpClueProductSaveV30Request(\Oceanengine\Models\DpaEbpClueProductSaveV30Request $dpaEbpClueProductSaveV30Request): self
    {
        $this->dpaEbpClueProductSaveV30Request = $dpaEbpClueProductSaveV30Request;
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
     * EBP创建/编辑升级版商品
     */
    public function execute(): \Oceanengine\Models\DpaEbpClueProductSaveV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaEbpClueProductSaveV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/clue_product/save/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpClueProductSaveV30Response::class);

        return $result['model'];
    }
}
