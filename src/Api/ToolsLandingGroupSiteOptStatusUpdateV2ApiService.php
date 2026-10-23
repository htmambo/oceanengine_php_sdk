<?php

/**
 * 本文件由 go2php 生成，源: api_tools_landing_group_site_opt_status_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsLandingGroupSiteOptStatusUpdateV2ApiService
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
     * 通过此接口，用户可以修改落地页组站点的启用状态。
     */
    public function post(): ApiOpenApi2ToolsLandingGroupSiteOptStatusUpdatePostRequest
    {
        return new ApiOpenApi2ToolsLandingGroupSiteOptStatusUpdatePostRequest($this);
    }
}
