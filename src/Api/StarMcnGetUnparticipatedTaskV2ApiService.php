<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_get_unparticipated_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnGetUnparticipatedTaskV2ApiService
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
     * 机构承包-获取未参与任务列表
     */
    public function get(): ApiOpenApi2StarMcnGetUnparticipatedTaskGetRequest
    {
        return new ApiOpenApi2StarMcnGetUnparticipatedTaskGetRequest($this);
    }
}
