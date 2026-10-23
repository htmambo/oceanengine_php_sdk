<?php

/**
 * 本文件由 go2php 生成，源: api_tools_material_raise_stop_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMaterialRaiseStopV30ApiService
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
     * 关停素材起量任务
     */
    public function post(): ApiOpenApiV30ToolsMaterialRaiseStopPostRequest
    {
        return new ApiOpenApiV30ToolsMaterialRaiseStopPostRequest($this);
    }
}
