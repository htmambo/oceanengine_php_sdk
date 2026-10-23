<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_convert_window_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroGameConvertWindowUpdateV30ApiService
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
     * 修改字节小游戏归因激活时间窗
     */
    public function post(): ApiOpenApiV30ToolsMicroGameConvertWindowUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsMicroGameConvertWindowUpdatePostRequest($this);
    }
}
