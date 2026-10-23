<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_block_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionBlockMaterialGetV10ApiService
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
     * 获取全域可排除抖音视频列表
     */
    public function get(): ApiOpenApiV10QianchuanUniPromotionBlockMaterialGetGetRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionBlockMaterialGetGetRequest($this);
    }
}
