<?php

/**
 * 本文件由 go2php 生成，源: api_tools_project_diagnosis_suggestion_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsProjectDiagnosisSuggestionListV30ApiService
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
     * 获取项目诊断建议
     */
    public function get(): ApiOpenApiV30ToolsProjectDiagnosisSuggestionListGetRequest
    {
        return new ApiOpenApiV30ToolsProjectDiagnosisSuggestionListGetRequest($this);
    }
}
