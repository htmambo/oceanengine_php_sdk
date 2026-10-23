<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_assign_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvertiserAssignV2ApiService
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
     * 广告主账户分配负责人、分配协作者
     */
    public function post(): ApiOpenApi2AgentAdvertiserAssignPostRequest
    {
        return new ApiOpenApi2AgentAdvertiserAssignPostRequest($this);
    }
}
