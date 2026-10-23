<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdControlTaskListV10ApiService
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
     * 获取调控任务列表
     */
    public function get(): ApiOpenApiV10QianchuanUniPromotionAdControlTaskListGetRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdControlTaskListGetRequest($this);
    }
}
