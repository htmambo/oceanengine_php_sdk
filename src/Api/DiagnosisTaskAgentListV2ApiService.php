<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_agent_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DiagnosisTaskAgentListV2ApiService
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
     * 代理商获取前测任务列表
     */
    public function get(): ApiOpenApi2DiagnosisTaskAgentListGetRequest
    {
        return new ApiOpenApi2DiagnosisTaskAgentListGetRequest($this);
    }
}
