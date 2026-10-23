<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_recommend_keywords_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApiV10QianchuanAdRecommendKeywordsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川广告账户id */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10Filtering 过滤条件 1. “search_word”、“product_id”、“aweme_id”，必须传入一个； 2. 优先按“search_word”过滤，其次按“product_id”过滤，最后按“aweme_id”过滤 */
    private ?\Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10Filtering $filtering = null;
    /** @var string 排序字段： 推荐度（默认）DEFAULT、 相关性RELEVANCE、 月搜索量PV、 竞争程度COMPETITION */
    private ?string $orderField = null;
    /** @var string 排序方式，允许值： ASC 升序、 DESC 降序（默认） */
    private ?string $orderType = null;
    /** @var string 选填入参。 请求唯一标识，能保证同样的过滤条件返回的数据是一致的。 使用过期后的cache_id请求该接口，不会报错，会当作全新的查询操作来处理。 */
    private ?string $cacheId = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var int 页面大小，允许值：500, 1000，默认值：500 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdRecommendKeywordsGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川广告账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤条件 1. “search_word”、“product_id”、“aweme_id”，必须传入一个； 2. 优先按“search_word”过滤，其次按“product_id”过滤，最后按“aweme_id”过滤
     */
    public function filtering(\Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 排序字段： 推荐度（默认）DEFAULT、 相关性RELEVANCE、 月搜索量PV、 竞争程度COMPETITION
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式，允许值： ASC 升序、 DESC 降序（默认）
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 选填入参。 请求唯一标识，能保证同样的过滤条件返回的数据是一致的。 使用过期后的cache_id请求该接口，不会报错，会当作全新的查询操作来处理。
     */
    public function cacheId(string $cacheId): self
    {
        $this->cacheId = $cacheId;
        return $this;
    }

    /**
     * 页码，默认值：1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，允许值：500, 1000，默认值：500
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->cacheId !== null) {
            $queryParams['cache_id'] = $this->cacheId;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/recommend_keywords/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdRecommendKeywordsGetV10Response::class);

        return $result['model'];
    }
}
