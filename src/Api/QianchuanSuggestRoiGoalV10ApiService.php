<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_suggest_roi_goal_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanSuggestRoiGoalV10ApiService
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
     * 获取建议roi目标
     */
    public function get(): ApiOpenApiV10QianchuanSuggestRoiGoalGetRequest
    {
        return new ApiOpenApiV10QianchuanSuggestRoiGoalGetRequest($this);
    }
}
