<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_lite_contact_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueLiteContactGetV2ApiService
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
     * 轻量化api-进行话单获取接口
     */
    public function post(): ApiOpenApi2ToolsClueLiteContactGetPostRequest
    {
        return new ApiOpenApi2ToolsClueLiteContactGetPostRequest($this);
    }
}
