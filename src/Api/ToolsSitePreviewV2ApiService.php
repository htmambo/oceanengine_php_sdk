<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_preview_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSitePreviewV2ApiService
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
     * 通过此接口，用户可以获取已创建站点的预览地址
     * 预览地址有效期：20分钟
     */
    public function get(): ApiOpenApi2ToolsSitePreviewGetRequest
    {
        return new ApiOpenApi2ToolsSitePreviewGetRequest($this);
    }
}
