<?php

/**
 * 本文件由 go2php 生成，源: api_local_tool_pack_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalToolPackDetailV30ApiService
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
     * 查询留资组件详情
     */
    public function get(): ApiOpenApiV30LocalToolPackDetailGetRequest
    {
        return new ApiOpenApiV30LocalToolPackDetailGetRequest($this);
    }
}
