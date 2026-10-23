<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_adv_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DiagnosisTaskAdvCreateV2ApiService
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
     * 通过此接口，用户可以通过传入视频id和投放设置(setting)创建对应的前测任务
     */
    public function post(): ApiOpenApi2DiagnosisTaskAdvCreatePostRequest
    {
        return new ApiOpenApi2DiagnosisTaskAdvCreatePostRequest($this);
    }
}
