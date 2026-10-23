<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_adv_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DiagnosisTaskAdvGetV2ApiService
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
     * Adv根据task_id获取前测结果
     */
    public function get(): ApiOpenApi2DiagnosisTaskAdvGetGetRequest
    {
        return new ApiOpenApi2DiagnosisTaskAdvGetGetRequest($this);
    }
}
