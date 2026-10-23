<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAppDetailV30ApiService
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
     * 查询安卓应用母包
     */
    public function get(): ApiOpenApiV30ToolsEbpAppDetailGetRequest
    {
        return new ApiOpenApiV30ToolsEbpAppDetailGetRequest($this);
    }
}
