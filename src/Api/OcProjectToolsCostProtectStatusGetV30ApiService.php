<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_cost_protect_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsCostProtectStatusGetV30ApiService
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
     * 获取任务成本保障状态
     */
    public function get(): ApiOpenApiV30OcProjectToolsCostProtectStatusGetGetRequest
    {
        return new ApiOpenApiV30OcProjectToolsCostProtectStatusGetGetRequest($this);
    }
}
