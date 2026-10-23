<?php

/**
 * 本文件由 go2php 生成，源: api_project_cost_protect_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectCostProtectStatusGetV30ApiService
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
     * 支持查询UBA项目层级成本保障状态（接口能力仅对齐AD）
     */
    public function get(): ApiOpenApiV30ProjectCostProtectStatusGetGetRequest
    {
        return new ApiOpenApiV30ProjectCostProtectStatusGetGetRequest($this);
    }
}
