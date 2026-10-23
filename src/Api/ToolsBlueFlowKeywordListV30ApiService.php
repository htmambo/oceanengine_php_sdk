<?php

/**
 * 本文件由 go2php 生成，源: api_tools_blue_flow_keyword_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsBlueFlowKeywordListV30ApiService
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
     * 创建蓝海广告时，获取同项目下可用的蓝海关键词
     */
    public function get(): ApiOpenApiV30ToolsBlueFlowKeywordListGetRequest
    {
        return new ApiOpenApiV30ToolsBlueFlowKeywordListGetRequest($this);
    }
}
