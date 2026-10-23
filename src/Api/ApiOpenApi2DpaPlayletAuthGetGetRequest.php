<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_playlet_auth_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询短剧商品原片授权申请状态
 */
class ApiOpenApi2DpaPlayletAuthGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主账户ID */
    private ?int $advertiserId = null;
    /** @var int 商品库ID */
    private ?int $platformId = null;
    /** @var int 商品ID */
    private ?int $productId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaPlayletAuthGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 商品库ID
     */
    public function platformId(int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * 商品ID
     */
    public function productId(int $productId): self
    {
        $this->productId = $productId;
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
     * 查询短剧商品原片授权申请状态
     */
    public function execute(): \Oceanengine\Models\DpaPlayletAuthGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->platformId === null) {
            throw new \InvalidArgumentException('platformId is required and must be specified');
        }
        if ($this->platformId < 1) {
            throw new \InvalidArgumentException('platformId must be greater than 1');
        }
        if ($this->productId === null) {
            throw new \InvalidArgumentException('productId is required and must be specified');
        }
        if ($this->productId < 1) {
            throw new \InvalidArgumentException('productId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['platform_id'] = $this->platformId;
        $queryParams['product_id'] = $this->productId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/playlet/auth/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaPlayletAuthGetV2Response::class);

        return $result['model'];
    }
}
