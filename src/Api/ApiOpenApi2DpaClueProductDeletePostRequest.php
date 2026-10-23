<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_clue_product_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 线索商品删除
 */
class ApiOpenApi2DpaClueProductDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaClueProductDeleteV2Request $dpaClueProductDeleteV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaClueProductDeleteV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaClueProductDeleteV2Request(\Oceanengine\Models\DpaClueProductDeleteV2Request $dpaClueProductDeleteV2Request): self
    {
        $this->dpaClueProductDeleteV2Request = $dpaClueProductDeleteV2Request;
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
     * 线索商品删除
     */
    public function execute(): \Oceanengine\Models\DpaClueProductDeleteV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaClueProductDeleteV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/clue_product/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaClueProductDeleteV2Response::class);

        return $result['model'];
    }
}
