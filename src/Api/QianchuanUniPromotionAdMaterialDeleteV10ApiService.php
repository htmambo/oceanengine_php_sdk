<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_material_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdMaterialDeleteV10ApiService
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
     * 删除全域推广计划下创意
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdMaterialDeletePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdMaterialDeletePostRequest($this);
    }
}
