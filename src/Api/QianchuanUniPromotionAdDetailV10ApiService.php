<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_detail_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdDetailV10ApiService
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
     * 获取全域推广计划详情
     */
    public function get(): ApiOpenApiV10QianchuanUniPromotionAdDetailGetRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdDetailGetRequest($this);
    }
}
