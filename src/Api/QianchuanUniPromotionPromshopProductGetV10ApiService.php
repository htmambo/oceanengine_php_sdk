<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_promshop_product_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionPromshopProductGetV10ApiService
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
     * 获取全店托管计划下商品列表接口
     */
    public function get(): ApiOpenApiV10QianchuanUniPromotionPromshopProductGetGetRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionPromshopProductGetGetRequest($this);
    }
}
