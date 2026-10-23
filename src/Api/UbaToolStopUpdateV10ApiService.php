<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_stop_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UbaToolStopUpdateV10ApiService
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
     * 项目计划关停
     */
    public function post(): ApiOpenApiV10UbaToolStopUpdatePostRequest
    {
        return new ApiOpenApiV10UbaToolStopUpdatePostRequest($this);
    }
}
