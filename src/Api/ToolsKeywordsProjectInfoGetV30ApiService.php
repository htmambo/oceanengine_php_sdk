<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_project_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsKeywordsProjectInfoGetV30ApiService
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
     * 账户优词工具-查询优词绑定的项目
     */
    public function get(): ApiOpenApiV30ToolsKeywordsProjectInfoGetGetRequest
    {
        return new ApiOpenApiV30ToolsKeywordsProjectInfoGetGetRequest($this);
    }
}
