<?php

/**
 * 本文件由 go2php 生成，源: api_tools_landing_group_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsLandingGroupGetV2ApiService
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
     * 通过此接口，用户可以获取落地页组以及站点的基本信息。
     */
    public function get(): ApiOpenApi2ToolsLandingGroupGetGetRequest
    {
        return new ApiOpenApi2ToolsLandingGroupGetGetRequest($this);
    }
}
