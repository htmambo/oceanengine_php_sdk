<?php

/**
 * 本文件由 go2php 生成，源: api_tools_third_site_preview_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsThirdSitePreviewV2ApiService
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
     * API Description
     */
    public function get(): ApiOpenApi2ToolsThirdSitePreviewGetRequest
    {
        return new ApiOpenApi2ToolsThirdSitePreviewGetRequest($this);
    }
}
