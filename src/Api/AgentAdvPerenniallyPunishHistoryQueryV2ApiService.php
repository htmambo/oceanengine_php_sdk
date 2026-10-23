<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_perennially_punish_history_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvPerenniallyPunishHistoryQueryV2ApiService
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
     * 查询某adv历史被代理商操作永久封停的记录，仅包含方舟新永久封停渠道封停的记录类型
     */
    public function get(): ApiOpenApi2AgentAdvPerenniallyPunishHistoryQueryGetRequest
    {
        return new ApiOpenApi2AgentAdvPerenniallyPunishHistoryQueryGetRequest($this);
    }
}
