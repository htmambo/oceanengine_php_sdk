<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvertiserSelectV2ApiService
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
     * 获取代理商下的广告主账号列表
     */
    public function get(): ApiOpenApi2AgentAdvertiserSelectGetRequest
    {
        return new ApiOpenApi2AgentAdvertiserSelectGetRequest($this);
    }
}
