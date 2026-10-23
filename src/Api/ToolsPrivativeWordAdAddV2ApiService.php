<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_ad_add_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPrivativeWordAdAddV2ApiService
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
     * API Description
     */
    public function post(): ApiOpenApi2ToolsPrivativeWordAdAddPostRequest
    {
        return new ApiOpenApi2ToolsPrivativeWordAdAddPostRequest($this);
    }
}
