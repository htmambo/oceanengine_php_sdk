<?php

/**
 * 本文件由 go2php 生成，源: api_tools_comment_metrics_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsCommentMetricsGetV30ApiService
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
     * @PM1
     */
    public function get(): ApiOpenApiV30ToolsCommentMetricsGetGetRequest
    {
        return new ApiOpenApiV30ToolsCommentMetricsGetGetRequest($this);
    }
}
