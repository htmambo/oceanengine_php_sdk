<?php

/**
 * 本文件由 go2php 生成，源: api_going_global_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class GoingGlobalUpdateV30ApiService
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
     * 批量修改一键出海信息
     */
    public function post(): ApiOpenApiV30GoingGlobalUpdatePostRequest
    {
        return new ApiOpenApiV30GoingGlobalUpdatePostRequest($this);
    }
}
