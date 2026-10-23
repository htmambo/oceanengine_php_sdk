<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_info_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvertiserInfoQueryV2ApiService
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
     * 广告主账户信息查询，包括：基础信息、自运营报备标签、账户绑定时间、账户联系人、账户负责人和协作者等
     */
    public function get(): ApiOpenApi2AgentAdvertiserInfoQueryGetRequest
    {
        return new ApiOpenApi2AgentAdvertiserInfoQueryGetRequest($this);
    }
}
