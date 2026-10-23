<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_site_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteTemplateSiteCreateV2ApiService
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
     * 基于站点创建模板
     */
    public function post(): ApiOpenApi2ToolsSiteTemplateSiteCreatePostRequest
    {
        return new ApiOpenApi2ToolsSiteTemplateSiteCreatePostRequest($this);
    }
}
