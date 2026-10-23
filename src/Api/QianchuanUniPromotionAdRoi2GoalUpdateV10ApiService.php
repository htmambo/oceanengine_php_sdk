<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_roi2_goal_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdRoi2GoalUpdateV10ApiService
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
     * 更新全域计划的支付ROI目标
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdRoi2GoalUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdRoi2GoalUpdatePostRequest($this);
    }
}
