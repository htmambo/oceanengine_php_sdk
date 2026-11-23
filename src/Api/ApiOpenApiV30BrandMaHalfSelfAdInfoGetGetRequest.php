<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_half_self_ad_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 按广告主、计划、广告组和计划时间范围查询半自助计划基础信息、审核结果和上线预警信息
 */
class ApiOpenApiV30BrandMaHalfSelfAdInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主ID列表，用于权限校验 */
    private ?array $advertiserIds = null;
    private ?\Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30Page $page = null;
    /** @var int[] 计划ID列表 */
    private ?array $adIds = null;
    /** @var int 广告组ID */
    private ?int $campaignId = null;
    /** @var \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30AdTimeRange 计划时间范围 */
    private ?\Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30AdTimeRange $adTimeRange = null;
    /** @var int[] 广告来源列表，不传默认查询波塞冬和OE */
    private ?array $sourceTypeList = null;
    /** @var int[] 计划审核状态列表 */
    private ?array $auditStatusList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaHalfSelfAdInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID列表，用于权限校验
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    public function page(\Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30Page $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 计划ID列表
     */
    public function adIds(array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * 广告组ID
     */
    public function campaignId(int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 计划时间范围
     */
    public function adTimeRange(\Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30AdTimeRange $adTimeRange): self
    {
        $this->adTimeRange = $adTimeRange;
        return $this;
    }

    /**
     * 广告来源列表，不传默认查询波塞冬和OE
     */
    public function sourceTypeList(array $sourceTypeList): self
    {
        $this->sourceTypeList = $sourceTypeList;
        return $this;
    }

    /**
     * 计划审核状态列表
     */
    public function auditStatusList(array $auditStatusList): self
    {
        $this->auditStatusList = $auditStatusList;
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
     * 按广告主、计划、广告组和计划时间范围查询半自助计划基础信息、审核结果和上线预警信息
     */
    public function execute(): \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->page !== null) {
            $__encoded0 = json_encode($this->page);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: page');
            }
            $queryParams['page'] = $__encoded0;
        }
        if ($this->adIds !== null) {
            $queryParams['ad_ids'] = $this->adIds;
        }
        if ($this->campaignId !== null) {
            $queryParams['campaign_id'] = $this->campaignId;
        }
        if ($this->adTimeRange !== null) {
            $__encoded1 = json_encode($this->adTimeRange);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: adTimeRange');
            }
            $queryParams['ad_time_range'] = $__encoded1;
        }
        if ($this->sourceTypeList !== null) {
            $queryParams['source_type_list'] = $this->sourceTypeList;
        }
        if ($this->auditStatusList !== null) {
            $queryParams['audit_status_list'] = $this->auditStatusList;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ma/half_self_ad_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30Response::class);

        return $result['model'];
    }
}
