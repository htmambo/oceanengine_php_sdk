<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_playlet_auth_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP查询短剧商品原片授权申请状态
 */
class ApiOpenApiV30DpaEbpPlayletAuthGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var int 商品库ID */
    private ?int $platformId = null;
    /** @var int 商品ID */
    private ?int $productId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpPlayletAuthGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
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
     * EBP查询短剧商品原片授权申请状态
     */
    public function execute(): \Oceanengine\Models\DpaEbpPlayletAuthGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountId < 1) {
            throw new \InvalidArgumentException('accountId must be greater than 1');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
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
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['platform_id'] = $this->platformId;
        $queryParams['product_id'] = $this->productId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/playlet/auth/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpPlayletAuthGetV30Response::class);

        return $result['model'];
    }
}
