<?php

/**
 * 本文件由 go2php 生成，源: api_tools_advertiser_diagnosis_suggestion_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAdvertiserDiagnosisSuggestionGetV30ApiService
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
     * 获取账户诊断建议
     */
    public function get(): ApiOpenApiV30ToolsAdvertiserDiagnosisSuggestionGetGetRequest
    {
        return new ApiOpenApiV30ToolsAdvertiserDiagnosisSuggestionGetGetRequest($this);
    }
}
