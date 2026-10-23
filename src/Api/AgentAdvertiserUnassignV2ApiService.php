<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_unassign_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvertiserUnassignV2ApiService
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
     * 广告主账户解绑负责人、解绑协作者
     */
    public function post(): ApiOpenApi2AgentAdvertiserUnassignPostRequest
    {
        return new ApiOpenApi2AgentAdvertiserUnassignPostRequest($this);
    }
}
