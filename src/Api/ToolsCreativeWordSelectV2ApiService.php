<?php

/**
 * 本文件由 go2php 生成，源: api_tools_creative_word_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsCreativeWordSelectV2ApiService
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
     * 提供动态创意词包查询功能
     */
    public function get(): ApiOpenApi2ToolsCreativeWordSelectGetRequest
    {
        return new ApiOpenApi2ToolsCreativeWordSelectGetRequest($this);
    }
}
