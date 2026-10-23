<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_estimate_effect_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanEstimateEffectV10ApiService
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
     * 推直播间-日常销售-通投-托管-放量投放场景获取预估效果
     */
    public function get(): ApiOpenApiV10QianchuanEstimateEffectGetRequest
    {
        return new ApiOpenApiV10QianchuanEstimateEffectGetRequest($this);
    }
}
