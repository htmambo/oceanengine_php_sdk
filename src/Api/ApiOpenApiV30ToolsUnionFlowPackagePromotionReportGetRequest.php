<?php

/**
 * 本文件由 go2php 生成，源: api_tools_union_flow_package_promotion_report_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查看穿山甲2.0广告位数据
 */
class ApiOpenApiV30ToolsUnionFlowPackagePromotionReportGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30Filter 筛选条件 */
    private ?\Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30Filter $filter = null;
    /** @var string 排序字段，所有的统计指标均可参与排序 默认按rit排序 */
    private ?string $orderField = null;
    /** @var string 排序方式 枚举值：ASC（升序），DESC（降序） 默认：DESC */
    private ?string $orderType = null;
    /** @var int 页数 默认值: 1 */
    private ?int $page = null;
    /** @var int 页面大小,限制范围[1, 100] 默认值: 10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsUnionFlowPackagePromotionReportV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 筛选条件
     */
    public function filter(\Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 排序字段，所有的统计指标均可参与排序 默认按rit排序
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式 枚举值：ASC（升序），DESC（降序） 默认：DESC
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 页数 默认值: 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小,限制范围[1, 100] 默认值: 10
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
     * 查看穿山甲2.0广告位数据
     */
    public function execute(): \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->filter === null) {
            throw new \InvalidArgumentException('filter is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/union/flow_package/promotion/report/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsUnionFlowPackagePromotionReportV30Response::class);

        return $result['model'];
    }
}
