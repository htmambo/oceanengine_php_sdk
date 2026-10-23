<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_agent_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DiagnosisTaskAgentGetV2ApiService
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
     * 代理商根据task_id获取前测结果
     */
    public function get(): ApiOpenApi2DiagnosisTaskAgentGetGetRequest
    {
        return new ApiOpenApi2DiagnosisTaskAgentGetGetRequest($this);
    }
}
