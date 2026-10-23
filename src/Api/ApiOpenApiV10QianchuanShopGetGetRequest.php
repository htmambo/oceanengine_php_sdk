<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_shop_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取店铺的基本信息
 */
class ApiOpenApiV10QianchuanShopGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $shopIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanShopGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function shopIds(array $shopIds): self
    {
        $this->shopIds = $shopIds;
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
     * 获取店铺的基本信息
     */
    public function execute(): \Oceanengine\Models\QianchuanShopGetV10Response
    {
        if ($this->shopIds === null) {
            throw new \InvalidArgumentException('shopIds is required and must be specified');
        }
        if (count($this->shopIds) < 1) {
            throw new \InvalidArgumentException('shopIds must have at least 1 elements');
        }
        if (count($this->shopIds) > 10) {
            throw new \InvalidArgumentException('shopIds must have less than 10 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['shop_ids'] = $this->shopIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/shop/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanShopGetV10Response::class);

        return $result['model'];
    }
}
