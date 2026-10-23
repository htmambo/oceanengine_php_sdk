<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_material_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账户下的创意Material
 */
class ApiOpenApiV30BrandMaMaterialListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主ID */
    private ?array $advertiserIds = null;
    /** @var int[] 创意ID */
    private ?array $materialIds = null;
    /** @var int[] 创意状态 */
    private ?array $materialStatus = null;
    /** @var string 创意投放开始时间（配合结束时间使用） */
    private ?string $startTime = null;
    /** @var string 创意投放结束时间（配合开始时间使用） */
    private ?string $endTime = null;
    /** @var \Oceanengine\Models\BrandMaMaterialListV30Page 分页信息 */
    private ?\Oceanengine\Models\BrandMaMaterialListV30Page $page = null;
    /** @var string 创意名称，模糊匹配 */
    private ?string $materialName = null;
    /** @var string 创意创建开始时间（配合结束时间使用） */
    private ?string $createStartTime = null;
    /** @var string 创意创建结束时间（配合开始时间使用） */
    private ?string $createEndTime = null;
    /** @var string 抖音号ID */
    private ?string $iesCoreUserId = null;
    private ?\Oceanengine\Models\BrandMaMaterialListV30OrderFilter $orderFilter = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaMaterialListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 创意ID
     */
    public function materialIds(array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 创意状态
     */
    public function materialStatus(array $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * 创意投放开始时间（配合结束时间使用）
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 创意投放结束时间（配合开始时间使用）
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 分页信息
     */
    public function page(\Oceanengine\Models\BrandMaMaterialListV30Page $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 创意名称，模糊匹配
     */
    public function materialName(string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * 创意创建开始时间（配合结束时间使用）
     */
    public function createStartTime(string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 创意创建结束时间（配合开始时间使用）
     */
    public function createEndTime(string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 抖音号ID
     */
    public function iesCoreUserId(string $iesCoreUserId): self
    {
        $this->iesCoreUserId = $iesCoreUserId;
        return $this;
    }

    public function orderFilter(\Oceanengine\Models\BrandMaMaterialListV30OrderFilter $orderFilter): self
    {
        $this->orderFilter = $orderFilter;
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
     * 查询账户下的创意Material
     */
    public function execute(): \Oceanengine\Models\BrandMaMaterialListV30Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->materialIds !== null) {
            $queryParams['material_ids'] = $this->materialIds;
        }
        if ($this->materialStatus !== null) {
            $queryParams['material_status'] = $this->materialStatus;
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
        if ($this->materialName !== null) {
            $queryParams['material_name'] = $this->materialName;
        }
        if ($this->createStartTime !== null) {
            $queryParams['create_start_time'] = $this->createStartTime;
        }
        if ($this->createEndTime !== null) {
            $queryParams['create_end_time'] = $this->createEndTime;
        }
        if ($this->iesCoreUserId !== null) {
            $queryParams['ies_core_user_id'] = $this->iesCoreUserId;
        }
        if ($this->orderFilter !== null) {
            $__encoded1 = json_encode($this->orderFilter);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: orderFilter');
            }
            $queryParams['order_filter'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ma/material/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaMaterialListV30Response::class);

        return $result['model'];
    }
}
