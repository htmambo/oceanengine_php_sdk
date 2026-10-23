<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_grant_result_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPlayableGrantResultV2ApiService
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
     * 试玩素材支持在同主体下进行推送，本接口用于获取试玩素材推送的结果。可根据【推送试玩素材】接口生成的task_id进行过滤检索试玩素材推送的状态。
     */
    public function get(): ApiOpenApi2ToolsPlayableGrantResultGetRequest
    {
        return new ApiOpenApi2ToolsPlayableGrantResultGetRequest($this);
    }
}
