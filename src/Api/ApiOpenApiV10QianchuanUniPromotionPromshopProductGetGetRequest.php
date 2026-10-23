<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_promshop_product_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全店托管计划下商品列表接口
 */
class ApiOpenApiV10QianchuanUniPromotionPromshopProductGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川广告账户ID */
    private ?int $advertiserId = null;
    /** @var int 计划id */
    private ?int $adId = null;
    /** @var string 数据开始日期，格式：YYYY-MM-DD，默认当天 注意：只会返回查询日期内有消耗的素材 */
    private ?string $startDate = null;
    /** @var string 数据结束日期，格式：YYYY-MM-DD，默认当天 注意：只会返回查询日期内有消耗的素材 */
    private ?string $endDate = null;
    /** @var string[] 需要查询的消耗指标，见返回参数 */
    private ?array $fields = null;
    /** @var int[] 0:未排除 1:已手动排除 2:已系统排除 */
    private ?array $adProductBlockStatusList = null;
    /** @var string 排序方式，允许值： ASC 升序（默认）、DESC 降序 */
    private ?string $orderType = null;
    /** @var string 排序字段，默认「整体展示次数」倒序，同时支持根据消耗指标排序 注意：排序字段必须在fields中 */
    private ?string $orderField = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var \Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10PageSize 页面大小，允许值：10, 20, 50, 100，默认值：10 */
    private ?\Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10PageSize $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionPromshopProductGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川广告账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 计划id
     */
    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 数据开始日期，格式：YYYY-MM-DD，默认当天 注意：只会返回查询日期内有消耗的素材
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 数据结束日期，格式：YYYY-MM-DD，默认当天 注意：只会返回查询日期内有消耗的素材
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 需要查询的消耗指标，见返回参数
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 0:未排除 1:已手动排除 2:已系统排除
     */
    public function adProductBlockStatusList(array $adProductBlockStatusList): self
    {
        $this->adProductBlockStatusList = $adProductBlockStatusList;
        return $this;
    }

    /**
     * 排序方式，允许值： ASC 升序（默认）、DESC 降序
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 排序字段，默认「整体展示次数」倒序，同时支持根据消耗指标排序 注意：排序字段必须在fields中
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
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
     * 页面大小，允许值：10, 20, 50, 100，默认值：10
     */
    public function pageSize(\Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10PageSize $pageSize): self
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
     * 获取全店托管计划下商品列表接口
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->adId === null) {
            throw new \InvalidArgumentException('adId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_id'] = $this->adId;
        if ($this->adProductBlockStatusList !== null) {
            $queryParams['ad_product_block_status_list'] = $this->adProductBlockStatusList;
        }
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $queryParams['fields'] = $this->fields;
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $__encoded0 = json_encode($this->pageSize);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageSize');
            }
            $queryParams['page_size'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/promshop/product/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionPromshopProductGetV10Response::class);

        return $result['model'];
    }
}
