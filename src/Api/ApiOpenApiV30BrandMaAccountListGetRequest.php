<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_account_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量获取广告主信息
 */
class ApiOpenApiV30BrandMaAccountListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主ID */
    private ?array $advertiserIds = null;
    /** @var bool 是否过滤正常数据（仅保留异常数据），默认不过滤 */
    private ?bool $excludeNormal = null;
    /** @var bool 是否查询投放订单信息，默认不查询 */
    private ?bool $withDeliveryInfo = null;
    /** @var bool 是否查询对公验证信息，默认不查询 */
    private ?bool $withPublicAuthInfo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaAccountListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 是否过滤正常数据（仅保留异常数据），默认不过滤
     */
    public function excludeNormal(bool $excludeNormal): self
    {
        $this->excludeNormal = $excludeNormal;
        return $this;
    }

    /**
     * 是否查询投放订单信息，默认不查询
     */
    public function withDeliveryInfo(bool $withDeliveryInfo): self
    {
        $this->withDeliveryInfo = $withDeliveryInfo;
        return $this;
    }

    /**
     * 是否查询对公验证信息，默认不查询
     */
    public function withPublicAuthInfo(bool $withPublicAuthInfo): self
    {
        $this->withPublicAuthInfo = $withPublicAuthInfo;
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
     * 批量获取广告主信息
     */
    public function execute(): \Oceanengine\Models\BrandMaAccountListV30Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->excludeNormal !== null) {
            $queryParams['exclude_normal'] = $this->excludeNormal;
        }
        if ($this->withDeliveryInfo !== null) {
            $queryParams['with_delivery_info'] = $this->withDeliveryInfo;
        }
        if ($this->withPublicAuthInfo !== null) {
            $queryParams['with_public_auth_info'] = $this->withPublicAuthInfo;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ma/account/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaAccountListV30Response::class);

        return $result['model'];
    }
}
