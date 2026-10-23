<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_material_add_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdMaterialAddV10ApiService
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
     * 添加全域推广计划下素材
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdMaterialAddPostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdMaterialAddPostRequest($this);
    }
}
