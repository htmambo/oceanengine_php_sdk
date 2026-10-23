<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_grant_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPlayableGrantV2ApiService
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
     * 本接口用于试玩素材推送，推送仅可推送至同主体下已开通试玩素材白名单的广告主。
     * 一次最多推送50个，由于推送是异步的，不会马上推送成功，从而会返回task_id，可根据task_id查询推送状态。
     */
    public function post(): ApiOpenApi2ToolsPlayableGrantPostRequest
    {
        return new ApiOpenApi2ToolsPlayableGrantPostRequest($this);
    }
}
