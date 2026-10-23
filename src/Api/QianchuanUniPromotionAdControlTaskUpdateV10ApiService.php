<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdControlTaskUpdateV10ApiService
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
     * 修改调控任务设置
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdControlTaskUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdControlTaskUpdatePostRequest($this);
    }
}
