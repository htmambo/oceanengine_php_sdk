<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_suggestion_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdSuggestionV10ApiService
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
     * 通过此接口获取广告全域计划纬度的审核意见
     */
    public function get(): ApiOpenApiV10QianchuanUniPromotionAdSuggestionGetRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdSuggestionGetRequest($this);
    }
}
