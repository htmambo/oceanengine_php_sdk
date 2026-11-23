<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_half_self_creative_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandMaHalfSelfCreativeInfoGetV30ApiService
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
     * 按广告主、计划、创意、广告组和计划时间范围查询半自助创意基础信息、展示数据和预览链接
     */
    public function get(): ApiOpenApiV30BrandMaHalfSelfCreativeInfoGetGetRequest
    {
        return new ApiOpenApiV30BrandMaHalfSelfCreativeInfoGetGetRequest($this);
    }
}
