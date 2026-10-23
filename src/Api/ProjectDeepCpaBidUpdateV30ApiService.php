<?php

/**
 * 本文件由 go2php 生成，源: api_project_deep_cpa_bid_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectDeepCpaBidUpdateV30ApiService
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
     * 支持通过本接口批量修改项目维度出价（deep_cpa_bid），支持修改深层出价
     */
    public function post(): ApiOpenApiV30ProjectDeepCpaBidUpdatePostRequest
    {
        return new ApiOpenApiV30ProjectDeepCpaBidUpdatePostRequest($this);
    }
}
