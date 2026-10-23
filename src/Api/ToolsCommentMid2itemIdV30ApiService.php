<?php

/**
 * 本文件由 go2php 生成，源: api_tools_comment_mid2item_id_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsCommentMid2itemIdV30ApiService
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
     * 获取评论视频列表@pm2
     */
    public function get(): ApiOpenApiV30ToolsCommentMid2itemIdGetRequest
    {
        return new ApiOpenApiV30ToolsCommentMid2itemIdGetRequest($this);
    }
}
