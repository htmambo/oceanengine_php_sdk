<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_diagnosis_suggestion_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionDiagnosisSuggestionGetV30ApiService
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
     * 2.0广告诊断for活跃度低
     */
    public function get(): ApiOpenApiV30ToolsPromotionDiagnosisSuggestionGetGetRequest
    {
        return new ApiOpenApiV30ToolsPromotionDiagnosisSuggestionGetGetRequest($this);
    }
}
