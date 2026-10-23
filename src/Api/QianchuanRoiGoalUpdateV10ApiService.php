<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_roi_goal_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanRoiGoalUpdateV10ApiService
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
     * 更新roi_goal
     */
    public function post(): ApiOpenApiV10QianchuanRoiGoalUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanRoiGoalUpdatePostRequest($this);
    }
}
