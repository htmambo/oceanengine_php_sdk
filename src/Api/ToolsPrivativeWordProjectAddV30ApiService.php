<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_project_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPrivativeWordProjectAddV30ApiService
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
     * 2.0快投项目添加否定词
     */
    public function post(): ApiOpenApiV30ToolsPrivativeWordProjectAddPostRequest
    {
        return new ApiOpenApiV30ToolsPrivativeWordProjectAddPostRequest($this);
    }
}
