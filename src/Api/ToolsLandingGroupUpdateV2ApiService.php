<?php

/**
 * 本文件由 go2php 生成，源: api_tools_landing_group_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsLandingGroupUpdateV2ApiService
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
     * 通过此接口，用户可以更新落地页组的基本信息。
     */
    public function post(): ApiOpenApi2ToolsLandingGroupUpdatePostRequest
    {
        return new ApiOpenApi2ToolsLandingGroupUpdatePostRequest($this);
    }
}
