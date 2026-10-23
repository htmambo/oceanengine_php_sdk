<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_suggest_roi_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniAwemeSuggestRoiV10ApiService
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
     * 获取全域推广控成本计划建议支付ROI目标
     */
    public function get(): ApiOpenApiV10QianchuanUniAwemeSuggestRoiGetRequest
    {
        return new ApiOpenApiV10QianchuanUniAwemeSuggestRoiGetRequest($this);
    }
}
