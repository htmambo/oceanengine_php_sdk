<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_product_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 乘方|全域商家创编可选商品列表
 */
class ApiOpenApiV10QianchuanUniPromotionProductGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\QianchuanUniPromotionProductGetV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanUniPromotionProductGetV10Filtering $filtering = null;
    /** @var int 抖音号id，乘方创编场景下不传，若乘方场景下传0，表示乘方无号创编商品列表； */
    private ?int $awemeId = null;
    /** @var bool 是否乘方创编场景获取商品列表 */
    private ?bool $isOverallMarketing = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var int 页码游标值 */
    private ?int $cursor = null;
    /** @var string 平台 */
    private ?string $platfrom = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionProductGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanUniPromotionProductGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 抖音号id，乘方创编场景下不传，若乘方场景下传0，表示乘方无号创编商品列表；
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 是否乘方创编场景获取商品列表
     */
    public function isOverallMarketing(bool $isOverallMarketing): self
    {
        $this->isOverallMarketing = $isOverallMarketing;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
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
     * 页码游标值
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 平台
     */
    public function platfrom(string $platfrom): self
    {
        $this->platfrom = $platfrom;
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
     * 乘方|全域商家创编可选商品列表
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionProductGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 0) {
            throw new \InvalidArgumentException('advertiserId must be greater than 0');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->isOverallMarketing !== null) {
            $queryParams['is_overall_marketing'] = $this->isOverallMarketing;
        }
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
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->platfrom !== null) {
            $queryParams['platfrom'] = $this->platfrom;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/product/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionProductGetV10Response::class);

        return $result['model'];
    }
}
