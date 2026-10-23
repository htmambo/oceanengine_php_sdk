<?php

/**
 * 本文件由 go2php 生成，源: api_tools_comment_reply_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsCommentReplyV30ApiService
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
    public function post(): ApiOpenApiV30ToolsCommentReplyPostRequest
    {
        return new ApiOpenApiV30ToolsCommentReplyPostRequest($this);
    }
}
