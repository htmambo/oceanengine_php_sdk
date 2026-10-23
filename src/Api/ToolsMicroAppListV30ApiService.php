<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_app_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroAppListV30ApiService
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
     * mapi场景获取字节小程序列表
     */
    public function get(): ApiOpenApiV30ToolsMicroAppListGetRequest
    {
        return new ApiOpenApiV30ToolsMicroAppListGetRequest($this);
    }
}
