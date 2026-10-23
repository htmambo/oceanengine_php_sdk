<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_smart_control_status_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10ApiService
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
     * 修改直播-一键控量计划调控状态
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdControlTaskSmartControlStatusUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdControlTaskSmartControlStatusUpdatePostRequest($this);
    }
}
