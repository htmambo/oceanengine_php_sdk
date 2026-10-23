<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账户下的预定单
 */
class ApiOpenApiV30BrandMaOrderListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 目标广告主ID */
    private ?array $advertiserIds = null;
    /** @var int[] 预定单ID */
    private ?array $orderIds = null;
    /** @var int[] 投放产品 */
    private ?array $adForm = null;
    /** @var int 产品类型 */
    private ?int $proType = null;
    /** @var int[] 审核状态 */
    private ?array $auditStatus = null;
    /** @var string 投放开始时间（配合结束时间使用） */
    private ?string $startTime = null;
    /** @var string 投放结束时间（配合开始时间使用） */
    private ?string $endTime = null;
    /** @var \Oceanengine\Models\BrandMaOrderListV30Page 分页参数 */
    private ?\Oceanengine\Models\BrandMaOrderListV30Page $page = null;
    /** @var int 投放位置 */
    private ?int $appOrigin = null;
    /** @var int 优化目标 */
    private ?int $gdSendType = null;
    /** @var int 进阶选项 */
    private ?int $advancedOption = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaOrderListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 目标广告主ID
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 预定单ID
     */
    public function orderIds(array $orderIds): self
    {
        $this->orderIds = $orderIds;
        return $this;
    }

    /**
     * 投放产品
     */
    public function adForm(array $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * 产品类型
     */
    public function proType(int $proType): self
    {
        $this->proType = $proType;
        return $this;
    }

    /**
     * 审核状态
     */
    public function auditStatus(array $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 投放开始时间（配合结束时间使用）
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 投放结束时间（配合开始时间使用）
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 分页参数
     */
    public function page(\Oceanengine\Models\BrandMaOrderListV30Page $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 投放位置
     */
    public function appOrigin(int $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * 优化目标
     */
    public function gdSendType(int $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * 进阶选项
     */
    public function advancedOption(int $advancedOption): self
    {
        $this->advancedOption = $advancedOption;
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
     * 查询账户下的预定单
     */
    public function execute(): \Oceanengine\Models\BrandMaOrderListV30Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->orderIds !== null) {
            $queryParams['order_ids'] = $this->orderIds;
        }
        if ($this->adForm !== null) {
            $queryParams['ad_form'] = $this->adForm;
        }
        if ($this->proType !== null) {
            $queryParams['pro_type'] = $this->proType;
        }
        if ($this->auditStatus !== null) {
            $queryParams['audit_status'] = $this->auditStatus;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $__encoded0 = json_encode($this->page);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: page');
            }
            $queryParams['page'] = $__encoded0;
        }
        if ($this->appOrigin !== null) {
            $queryParams['app_origin'] = $this->appOrigin;
        }
        if ($this->gdSendType !== null) {
            $queryParams['gd_send_type'] = $this->gdSendType;
        }
        if ($this->advancedOption !== null) {
            $queryParams['advanced_option'] = $this->advancedOption;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ma/order/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaOrderListV30Response::class);

        return $result['model'];
    }
}
