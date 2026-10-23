<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_perennially_punish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvPerenniallyPunishV2ApiService
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
     * 永久惩罚广告主
     */
    public function post(): ApiOpenApi2AgentAdvPerenniallyPunishPostRequest
    {
        return new ApiOpenApi2AgentAdvPerenniallyPunishPostRequest($this);
    }
}
