<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_role_permission_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpRolePermissionGetV2ApiService
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
     * 查询当前 OAuth 用户在指定 EBP 组织下的角色及其可访问的开放平台接口权限范围。
     */
    public function get(): ApiOpenApi2EbpRolePermissionGetGetRequest
    {
        return new ApiOpenApi2EbpRolePermissionGetGetRequest($this);
    }
}
