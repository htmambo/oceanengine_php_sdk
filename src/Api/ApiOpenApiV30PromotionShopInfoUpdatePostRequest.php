<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_shop_info_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 电商店铺信息回传
 */
class ApiOpenApiV30PromotionShopInfoUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\PromotionShopInfoUpdateV30Request $promotionShopInfoUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionShopInfoUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionShopInfoUpdateV30Request(\Oceanengine\Models\PromotionShopInfoUpdateV30Request $promotionShopInfoUpdateV30Request): self
    {
        $this->promotionShopInfoUpdateV30Request = $promotionShopInfoUpdateV30Request;
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
     * 电商店铺信息回传
     */
    public function execute(): \Oceanengine\Models\PromotionShopInfoUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->promotionShopInfoUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/shop_info/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionShopInfoUpdateV30Response::class);

        return $result['model'];
    }
}
