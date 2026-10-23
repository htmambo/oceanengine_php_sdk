<?php

/**
 * 本文件由 go2php 生成，源: api_tools_is_support_universal_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsIsSupportUniversalGetV2ApiService
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
     * 本接口旨在帮助开发者判断相关创建条件（推广目的类型、预定义转化目标、深度转化目标、深度优化方式等）是否支持通投智选。
     */
    public function get(): ApiOpenApi2ToolsIsSupportUniversalGetGetRequest
    {
        return new ApiOpenApi2ToolsIsSupportUniversalGetGetRequest($this);
    }
}
