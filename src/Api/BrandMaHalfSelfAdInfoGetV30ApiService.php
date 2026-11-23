<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_half_self_ad_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandMaHalfSelfAdInfoGetV30ApiService
{
    private \Oceanengine\ApiClient $apiClient;

    public function __construct(\Oceanengine\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient(): \Oceanengine\ApiClient
    {
        return $this->apiClient;
    }

    /**
     * 按广告主、计划、广告组和计划时间范围查询半自助计划基础信息、审核结果和上线预警信息
     */
    public function get(): ApiOpenApiV30BrandMaHalfSelfAdInfoGetGetRequest
    {
        return new ApiOpenApiV30BrandMaHalfSelfAdInfoGetGetRequest($this);
    }
}
