<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_game_book_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAppGameBookListV30ApiService
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
     * 获取游戏预约列表
     */
    public function get(): ApiOpenApiV30ToolsEbpAppGameBookListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpAppGameBookListGetRequest($this);
    }
}
