<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_diagnosis_suggestion_accept_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionDiagnosisSuggestionAcceptV30ApiService
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
     * 2.0诊断采纳API
     */
    public function post(): ApiOpenApiV30ToolsPromotionDiagnosisSuggestionAcceptPostRequest
    {
        return new ApiOpenApiV30ToolsPromotionDiagnosisSuggestionAcceptPostRequest($this);
    }
}
