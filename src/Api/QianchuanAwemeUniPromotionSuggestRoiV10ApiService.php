<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_suggest_roi_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeUniPromotionSuggestRoiV10ApiService
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
     * 获取随心推全域手动出价计划建议ROI
     */
    public function get(): ApiOpenApiV10QianchuanAwemeUniPromotionSuggestRoiGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeUniPromotionSuggestRoiGetRequest($this);
    }
}
