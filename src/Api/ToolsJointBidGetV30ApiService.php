<?php

/**
 * 本文件由 go2php 生成，源: api_tools_joint_bid_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsJointBidGetV30ApiService
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
     * 获取联合出价设置
     */
    public function get(): ApiOpenApiV30ToolsJointBidGetGetRequest
    {
        return new ApiOpenApiV30ToolsJointBidGetGetRequest($this);
    }
}
