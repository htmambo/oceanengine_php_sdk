<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_keyword_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsKeywordUpdateV30ApiService
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
     * 编辑关键词调控任务
     */
    public function post(): ApiOpenApiV30OcProjectToolsKeywordUpdatePostRequest
    {
        return new ApiOpenApiV30OcProjectToolsKeywordUpdatePostRequest($this);
    }
}
