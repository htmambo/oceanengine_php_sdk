<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteTemplateCreateV2ApiService
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
     * 获取橙子建站站点列表
     */
    public function post(): ApiOpenApi2ToolsSiteTemplateCreatePostRequest
    {
        return new ApiOpenApi2ToolsSiteTemplateCreatePostRequest($this);
    }
}
