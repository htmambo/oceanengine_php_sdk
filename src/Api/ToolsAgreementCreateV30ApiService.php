<?php

/**
 * 本文件由 go2php 生成，源: api_tools_agreement_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAgreementCreateV30ApiService
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
     * 完成特定协议最新版本签署
     */
    public function post(): ApiOpenApiV30ToolsAgreementCreatePostRequest
    {
        return new ApiOpenApiV30ToolsAgreementCreatePostRequest($this);
    }
}
