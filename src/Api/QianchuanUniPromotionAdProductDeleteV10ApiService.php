<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_product_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdProductDeleteV10ApiService
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
     * 删除全域计划下商品
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdProductDeletePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdProductDeletePostRequest($this);
    }
}
