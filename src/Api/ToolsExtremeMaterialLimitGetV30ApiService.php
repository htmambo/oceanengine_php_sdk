<?php

/**
 * 本文件由 go2php 生成，源: api_tools_extreme_material_limit_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsExtremeMaterialLimitGetV30ApiService
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
     * 查询广告主近 30 天在关联组×二级行业、company_id×二级行业两维度的警告/限制通知、命中层级、限制周期
     */
    public function get(): ApiOpenApiV30ToolsExtremeMaterialLimitGetGetRequest
    {
        return new ApiOpenApiV30ToolsExtremeMaterialLimitGetGetRequest($this);
    }
}
