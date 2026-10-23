<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_status_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRtaStatusUpdateV2ApiService
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
     * 修改RTA策略状态
     */
    public function post(): ApiOpenApi2ToolsRtaStatusUpdatePostRequest
    {
        return new ApiOpenApi2ToolsRtaStatusUpdatePostRequest($this);
    }
}
