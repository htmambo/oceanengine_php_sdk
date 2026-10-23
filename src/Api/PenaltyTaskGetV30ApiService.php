<?php

/**
 * 本文件由 go2php 生成，源: api_penalty_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PenaltyTaskGetV30ApiService
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
     * 查询客户扣罚单
     */
    public function get(): ApiOpenApiV30PenaltyTaskGetGetRequest
    {
        return new ApiOpenApiV30PenaltyTaskGetGetRequest($this);
    }
}
