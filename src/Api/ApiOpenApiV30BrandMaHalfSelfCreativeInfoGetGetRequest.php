<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_half_self_creative_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 按广告主、计划、创意、广告组和计划时间范围查询半自助创意基础信息、展示数据和预览链接
 */
class ApiOpenApiV30BrandMaHalfSelfCreativeInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主ID列表，用于权限校验 */
    private ?array $advertiserIds = null;
    /** @var int[] 计划ID列表 */
    private ?array $adIds = null;
    /** @var int[] 创意ID列表 */
    private ?array $creativeIds = null;
    /** @var int 广告组ID */
    private ?int $campaignId = null;
    /** @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30AdTimeRange 计划时间范围 */
    private ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30AdTimeRange $adTimeRange = null;
    /** @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30Page 分页参数，不传默认第一页10条 */
    private ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30Page $page = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandMaHalfSelfCreativeInfoGetV30ApiService $service)
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

    /**
     * 计划ID列表
     */
    public function adIds(array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * 创意ID列表
     */
    public function creativeIds(array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
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
    public function adTimeRange(\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30AdTimeRange $adTimeRange): self
    {
        $this->adTimeRange = $adTimeRange;
        return $this;
    }

    /**
     * 分页参数，不传默认第一页10条
     */
    public function page(\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30Page $page): self
    {
        $this->page = $page;
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
     * 按广告主、计划、创意、广告组和计划时间范围查询半自助创意基础信息、展示数据和预览链接
     */
    public function execute(): \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->adIds !== null) {
            $queryParams['ad_ids'] = $this->adIds;
        }
        if ($this->creativeIds !== null) {
            $queryParams['creative_ids'] = $this->creativeIds;
        }
        if ($this->campaignId !== null) {
            $queryParams['campaign_id'] = $this->campaignId;
        }
        if ($this->adTimeRange !== null) {
            $__encoded0 = json_encode($this->adTimeRange);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: adTimeRange');
            }
            $queryParams['ad_time_range'] = $__encoded0;
        }
        if ($this->page !== null) {
            $__encoded1 = json_encode($this->page);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: page');
            }
            $queryParams['page'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/ma/half_self_creative_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30Response::class);

        return $result['model'];
    }
}
