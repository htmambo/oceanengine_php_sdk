<?php

/**
 * 本文件由 go2php 生成，源: api_tools_joint_bid_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsJointBidUpdateV30ApiService
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
     * 更新联合出价范围及RTA_ID
     */
    public function post(): ApiOpenApiV30ToolsJointBidUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsJointBidUpdatePostRequest($this);
    }
}
