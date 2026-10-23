<?php

/**
 * 本文件由 go2php 生成，源: api_local_tool_pack_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalToolPackListGetV30ApiService
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
     * 获取可用留资组件列表
     */
    public function get(): ApiOpenApiV30LocalToolPackListGetGetRequest
    {
        return new ApiOpenApiV30LocalToolPackListGetGetRequest($this);
    }
}
