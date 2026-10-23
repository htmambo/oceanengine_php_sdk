<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_product_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口用于删除商品库中的特定商品
 */
class ApiOpenApi2DpaProductDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaProductDeleteV2Request $dpaProductDeleteV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaProductDeleteV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaProductDeleteV2Request(\Oceanengine\Models\DpaProductDeleteV2Request $dpaProductDeleteV2Request): self
    {
        $this->dpaProductDeleteV2Request = $dpaProductDeleteV2Request;
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
     * 此接口用于删除商品库中的特定商品
     */
    public function execute(): \Oceanengine\Models\DpaProductDeleteV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaProductDeleteV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/product/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaProductDeleteV2Response::class);

        return $result['model'];
    }
}
