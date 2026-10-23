<?php

/**
 * 本文件由 go2php 生成，源: api_tools_quota_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsQuotaGetV2ApiService
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
     * >该接口用于查询广告账户的在投计划配额和使用进度。
     */
    public function get(): ApiOpenApi2ToolsQuotaGetGetRequest
    {
        return new ApiOpenApi2ToolsQuotaGetGetRequest($this);
    }
}
