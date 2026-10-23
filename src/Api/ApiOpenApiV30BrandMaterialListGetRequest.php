<?php

/**
 * 本文件由 go2php 生成，源: api_brand_material_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询品牌自助2.0素材列表
 */
class ApiOpenApiV30BrandMaterialListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int[] 素材ID */
    private ?array $materialIds = null;
    /** @var string 素材名称 */
    private ?string $materialName = null;
    /** @var string[] 素材状态 */
    private ?array $materialStatus = null;
    /** @var string 抖音号ID */
    private ?string $iesCoreUserId = null;
    /** @var \Oceanengine\Models\BrandMaterialListV30OrderFilter 预订单过滤条件 */
    private ?\Oceanengine\Models\BrandMaterialListV30OrderFilter $orderFilter = null;
    /** @var string 投放起始时间 */
    private ?string $startTime = null;
    /** @var string 投放截止时间 */
    private ?string $endTime = null;
    /** @var \Oceanengine\Models\BrandMaterialListV30CampaignFilter 广告组过滤条件 */
    private ?\Oceanengine\Models\BrandMaterialListV30CampaignFilter $campaignFilter = null;
    /** @var \Oceanengine\Models\BrandMaterialListV30PageInfo 分页信息 */
    private ?\Oceanengine\Models\BrandMaterialListV30PageInfo $pageInfo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaterialListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材ID
     */
    public function materialIds(array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 素材名称
     */
    public function materialName(string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * 素材状态
     */
    public function materialStatus(array $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
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

    /**
     * 预订单过滤条件
     */
    public function orderFilter(\Oceanengine\Models\BrandMaterialListV30OrderFilter $orderFilter): self
    {
        $this->orderFilter = $orderFilter;
        return $this;
    }

    /**
     * 投放起始时间
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 投放截止时间
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 广告组过滤条件
     */
    public function campaignFilter(\Oceanengine\Models\BrandMaterialListV30CampaignFilter $campaignFilter): self
    {
        $this->campaignFilter = $campaignFilter;
        return $this;
    }

    /**
     * 分页信息
     */
    public function pageInfo(\Oceanengine\Models\BrandMaterialListV30PageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
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
     * 查询品牌自助2.0素材列表
     */
    public function execute(): \Oceanengine\Models\BrandMaterialListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->materialIds !== null) {
            $queryParams['material_ids'] = $this->materialIds;
        }
        if ($this->materialName !== null) {
            $queryParams['material_name'] = $this->materialName;
        }
        if ($this->materialStatus !== null) {
            $queryParams['material_status'] = $this->materialStatus;
        }
        if ($this->iesCoreUserId !== null) {
            $queryParams['ies_core_user_id'] = $this->iesCoreUserId;
        }
        if ($this->orderFilter !== null) {
            $__encoded0 = json_encode($this->orderFilter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: orderFilter');
            }
            $queryParams['order_filter'] = $__encoded0;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->campaignFilter !== null) {
            $__encoded1 = json_encode($this->campaignFilter);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: campaignFilter');
            }
            $queryParams['campaign_filter'] = $__encoded1;
        }
        if ($this->pageInfo !== null) {
            $__encoded2 = json_encode($this->pageInfo);
            if ($__encoded2 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageInfo');
            }
            $queryParams['page_info'] = $__encoded2;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/material/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaterialListV30Response::class);

        return $result['model'];
    }
}
