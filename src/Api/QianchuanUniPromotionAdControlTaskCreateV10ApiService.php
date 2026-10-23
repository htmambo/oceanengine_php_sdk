<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdControlTaskCreateV10ApiService
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
     * 创建调控任务
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdControlTaskCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdControlTaskCreatePostRequest($this);
    }
}
