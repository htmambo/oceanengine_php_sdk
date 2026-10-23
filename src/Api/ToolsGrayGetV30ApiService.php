<?php

/**
 * 本文件由 go2php 生成，源: api_tools_gray_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsGrayGetV30ApiService
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
     * 支持客户通过接口查询广告主是否命中各项灰度/白名单功能
     */
    public function get(): ApiOpenApiV30ToolsGrayGetGetRequest
    {
        return new ApiOpenApiV30ToolsGrayGetGetRequest($this);
    }
}
