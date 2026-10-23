<?php

/**
 * 本文件由 go2php 生成，源: api_tools_diagnosis_suggestion_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsDiagnosisSuggestionGetV30ApiService
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
     * 用于获取 巨量广告平台-广告层级的诊断建议
     */
    public function get(): ApiOpenApiV30ToolsDiagnosisSuggestionGetGetRequest
    {
        return new ApiOpenApiV30ToolsDiagnosisSuggestionGetGetRequest($this);
    }
}
