<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_clue_product_save_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 线索版商品新增&编辑
 */
class ApiOpenApi2DpaClueProductSavePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaClueProductSaveV2Request $dpaClueProductSaveV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaClueProductSaveV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaClueProductSaveV2Request(\Oceanengine\Models\DpaClueProductSaveV2Request $dpaClueProductSaveV2Request): self
    {
        $this->dpaClueProductSaveV2Request = $dpaClueProductSaveV2Request;
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
     * 线索版商品新增&编辑
     */
    public function execute(): \Oceanengine\Models\DpaClueProductSaveV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaClueProductSaveV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/clue_product/save/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaClueProductSaveV2Response::class);

        return $result['model'];
    }
}
