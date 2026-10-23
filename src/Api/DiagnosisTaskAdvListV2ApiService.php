<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_adv_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DiagnosisTaskAdvListV2ApiService
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
     * Adv获取前测任务列表
     */
    public function get(): ApiOpenApi2DiagnosisTaskAdvListGetRequest
    {
        return new ApiOpenApi2DiagnosisTaskAdvListGetRequest($this);
    }
}
