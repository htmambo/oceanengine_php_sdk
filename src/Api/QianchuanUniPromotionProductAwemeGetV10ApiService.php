<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_product_aweme_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionProductAwemeGetV10ApiService
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
     * 全域达人获取可投商品列表
     */
    public function get(): ApiOpenApiV10QianchuanUniPromotionProductAwemeGetGetRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionProductAwemeGetGetRequest($this);
    }
}
