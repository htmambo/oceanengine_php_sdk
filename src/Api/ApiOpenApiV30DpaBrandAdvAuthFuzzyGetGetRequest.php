<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_brand_adv_auth_fuzzy_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取广告账户可投品牌列表，支持按照品牌名称模糊查询
 */
class ApiOpenApiV30DpaBrandAdvAuthFuzzyGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $accountId = null;
    /** @var string[] 品牌数据来源 */
    private ?array $brandDataSourceList = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var string 品牌名称 */
    private ?string $brandName = null;
    /** @var string 检索类型 */
    private ?string $matchType = null;
    /** @var string 是否支持5a种草 */
    private ?string $has5aGrassBrand = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaBrandAdvAuthFuzzyGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 品牌数据来源
     */
    public function brandDataSourceList(array $brandDataSourceList): self
    {
        $this->brandDataSourceList = $brandDataSourceList;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 品牌名称
     */
    public function brandName(string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * 检索类型
     */
    public function matchType(string $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * 是否支持5a种草
     */
    public function has5aGrassBrand(string $has5aGrassBrand): self
    {
        $this->has5aGrassBrand = $has5aGrassBrand;
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
     * 获取广告账户可投品牌列表，支持按照品牌名称模糊查询
     */
    public function execute(): \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->brandDataSourceList === null) {
            throw new \InvalidArgumentException('brandDataSourceList is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        if ($this->brandName !== null) {
            $queryParams['brand_name'] = $this->brandName;
        }
        if ($this->matchType !== null) {
            $queryParams['match_type'] = $this->matchType;
        }
        $queryParams['brand_data_source_list'] = $this->brandDataSourceList;
        if ($this->has5aGrassBrand !== null) {
            $queryParams['has_5a_grass_brand'] = $this->has5aGrassBrand;
        }
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/brand/adv_auth/fuzzy/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30Response::class);

        return $result['model'];
    }
}
