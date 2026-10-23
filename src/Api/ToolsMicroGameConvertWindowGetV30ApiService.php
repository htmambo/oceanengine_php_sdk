<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_convert_window_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroGameConvertWindowGetV30ApiService
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
     * 查询字节小游戏归因激活时间窗
     */
    public function get(): ApiOpenApiV30ToolsMicroGameConvertWindowGetGetRequest
    {
        return new ApiOpenApiV30ToolsMicroGameConvertWindowGetGetRequest($this);
    }
}
