<?php

/**
 * 本文件由 go2php 生成，源: api_tools_advertiser_diagnosis_suggestion_accept_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ApiService
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
     * 采纳7R诊断建议
     */
    public function post(): ApiOpenApiV30ToolsAdvertiserDiagnosisSuggestionAcceptUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsAdvertiserDiagnosisSuggestionAcceptUpdatePostRequest($this);
    }
}
