<?php

/**
 * 本文件由 go2php 生成，源: api_shop_bonus_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 阿里健康根据SPI消息获知哪些商品可配置券后，对巨量回传具体配置优惠券的相关信息
 */
class ApiOpenApiV30ShopBonusCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ShopBonusCreateV30Request $shopBonusCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ShopBonusCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function shopBonusCreateV30Request(\Oceanengine\Models\ShopBonusCreateV30Request $shopBonusCreateV30Request): self
    {
        $this->shopBonusCreateV30Request = $shopBonusCreateV30Request;
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
     * 阿里健康根据SPI消息获知哪些商品可配置券后，对巨量回传具体配置优惠券的相关信息
     */
    public function execute(): \Oceanengine\Models\ShopBonusCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->shopBonusCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/shop_bonus/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ShopBonusCreateV30Response::class);

        return $result['model'];
    }
}
