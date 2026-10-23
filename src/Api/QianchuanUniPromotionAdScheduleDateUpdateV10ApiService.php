<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_schedule_date_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdScheduleDateUpdateV10ApiService
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
     * 更新全域计划投放时间
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdScheduleDateUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdScheduleDateUpdatePostRequest($this);
    }
}
