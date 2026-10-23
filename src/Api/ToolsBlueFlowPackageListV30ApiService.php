<?php

/**
 * 本文件由 go2php 生成，源: api_tools_blue_flow_package_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsBlueFlowPackageListV30ApiService
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
     * 按照广告主ID，获取蓝海流量包列表，支持按照包名称或ID进行筛选
     */
    public function get(): ApiOpenApiV30ToolsBlueFlowPackageListGetRequest
    {
        return new ApiOpenApiV30ToolsBlueFlowPackageListGetRequest($this);
    }
}
