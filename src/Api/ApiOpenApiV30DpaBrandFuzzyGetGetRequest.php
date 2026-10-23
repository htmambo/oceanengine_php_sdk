<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_brand_fuzzy_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 模糊查询品牌信息，目前只返回商标品牌
 */
class ApiOpenApiV30DpaBrandFuzzyGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户id */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var string 品牌名称（用于模糊查询的品牌关键字） */
    private ?string $brandName = null;
    /** @var int 页码，默认1，最大100 */
    private ?int $page = null;
    /** @var int 页面大小，默认20，最大100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaBrandFuzzyGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户id
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
     * 品牌名称（用于模糊查询的品牌关键字）
     */
    public function brandName(string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * 页码，默认1，最大100
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认20，最大100
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 模糊查询品牌信息，目前只返回商标品牌
     */
    public function execute(): \Oceanengine\Models\DpaBrandFuzzyGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->brandName === null) {
            throw new \InvalidArgumentException('brandName is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['brand_name'] = $this->brandName;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/brand/fuzzy/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaBrandFuzzyGetV30Response::class);

        return $result['model'];
    }
}
