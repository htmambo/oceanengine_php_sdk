<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_batch_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPrivativeWordBatchGetV30ApiService
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
     * 2.0项目批量查询否定词
     */
    public function post(): ApiOpenApiV30ToolsPrivativeWordBatchGetPostRequest
    {
        return new ApiOpenApiV30ToolsPrivativeWordBatchGetPostRequest($this);
    }
}
