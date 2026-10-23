<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_playable_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpPlayableListV30ApiService
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
     * 获取账户可用的组织试玩/直玩素材
     */
    public function get(): ApiOpenApiV30ToolsEbpPlayableListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpPlayableListGetRequest($this);
    }
}
