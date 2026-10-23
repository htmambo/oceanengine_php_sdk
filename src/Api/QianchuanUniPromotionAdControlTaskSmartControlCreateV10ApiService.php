<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_smart_control_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdControlTaskSmartControlCreateV10ApiService
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
     * 创建直播-一键控量计划
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdControlTaskSmartControlCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdControlTaskSmartControlCreatePostRequest($this);
    }
}
