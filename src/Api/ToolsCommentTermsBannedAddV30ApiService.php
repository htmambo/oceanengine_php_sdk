<?php

/**
 * 本文件由 go2php 生成，源: api_tools_comment_terms_banned_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsCommentTermsBannedAddV30ApiService
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
     * @PM2
     */
    public function post(): ApiOpenApiV30ToolsCommentTermsBannedAddPostRequest
    {
        return new ApiOpenApiV30ToolsCommentTermsBannedAddPostRequest($this);
    }
}
