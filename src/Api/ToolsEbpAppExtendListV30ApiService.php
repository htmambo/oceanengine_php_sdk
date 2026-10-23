<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_extend_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAppExtendListV30ApiService
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
     * 安卓应用分包列表
     */
    public function get(): ApiOpenApiV30ToolsEbpAppExtendListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpAppExtendListGetRequest($this);
    }
}
