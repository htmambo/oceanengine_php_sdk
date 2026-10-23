<?php

/**
 * 本文件由 go2php 生成，源: api_agent_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentInfoV2ApiService
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
     * 获取代理商信息
     */
    public function get(): ApiOpenApi2AgentInfoGetRequest
    {
        return new ApiOpenApi2AgentInfoGetRequest($this);
    }
}
