<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rubeex_playable_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRubeexPlayableListV2ApiService
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
     * 获取互动作品关联的试玩素材列表
     */
    public function get(): ApiOpenApi2ToolsRubeexPlayableListGetRequest
    {
        return new ApiOpenApi2ToolsRubeexPlayableListGetRequest($this);
    }
}
