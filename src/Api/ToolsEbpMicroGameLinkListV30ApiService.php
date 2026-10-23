<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_micro_game_link_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpMicroGameLinkListV30ApiService
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
     * 获取字节小游戏link详情
     */
    public function get(): ApiOpenApiV30ToolsEbpMicroGameLinkListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpMicroGameLinkListGetRequest($this);
    }
}
