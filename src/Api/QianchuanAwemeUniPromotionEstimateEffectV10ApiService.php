<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_estimate_effect_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeUniPromotionEstimateEffectV10ApiService
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
     * 获取随心推全域投放效果预估
     */
    public function get(): ApiOpenApiV10QianchuanAwemeUniPromotionEstimateEffectGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeUniPromotionEstimateEffectGetRequest($this);
    }
}
