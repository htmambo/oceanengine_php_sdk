<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP获取升级版商品详情
 */
class ApiOpenApiV30DpaEbpClueProductGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    private ?array $productIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpClueProductGetV30ApiService $service)
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

    public function productIds(array $productIds): self
    {
        $this->productIds = $productIds;
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
     * EBP获取升级版商品详情
     */
    public function execute(): \Oceanengine\Models\DpaEbpClueProductGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->productIds === null) {
            throw new \InvalidArgumentException('productIds is required and must be specified');
        }
        if (count($this->productIds) > 100) {
            throw new \InvalidArgumentException('productIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['product_ids'] = $this->productIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/clue_product/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpClueProductGetV30Response::class);

        return $result['model'];
    }
}
