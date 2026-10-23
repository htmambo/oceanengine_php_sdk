<?php

/**
 * 本文件由 go2php 生成，源: api_tools_joint_bid_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsJointBidCreateV30ApiService
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
     * 创建联合出价工具
     */
    public function post(): ApiOpenApiV30ToolsJointBidCreatePostRequest
    {
        return new ApiOpenApiV30ToolsJointBidCreatePostRequest($this);
    }
}
