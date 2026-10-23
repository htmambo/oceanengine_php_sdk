<?php

/**
 * 本文件由 go2php 生成，源: api_ad_shop_info_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 店铺信息更新
 */
class ApiOpenApiV30AdShopInfoUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdShopInfoUpdateV30Request $adShopInfoUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdShopInfoUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function adShopInfoUpdateV30Request(\Oceanengine\Models\AdShopInfoUpdateV30Request $adShopInfoUpdateV30Request): self
    {
        $this->adShopInfoUpdateV30Request = $adShopInfoUpdateV30Request;
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
     * 店铺信息更新
     */
    public function execute(): \Oceanengine\Models\AdShopInfoUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->adShopInfoUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ad/shop_info/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdShopInfoUpdateV30Response::class);

        return $result['model'];
    }
}
