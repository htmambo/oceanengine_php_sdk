<?php

/**
 * 本文件由 go2php 生成，源: api_local_diagnosis_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalDiagnosisResultGetV30ApiService
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
     * 获取投放效果agent诊断结果
     */
    public function get(): ApiOpenApiV30LocalDiagnosisResultGetGetRequest
    {
        return new ApiOpenApiV30LocalDiagnosisResultGetGetRequest($this);
    }
}
