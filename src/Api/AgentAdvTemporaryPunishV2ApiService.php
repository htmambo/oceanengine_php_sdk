<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_temporary_punish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvTemporaryPunishV2ApiService
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
     * 临时惩罚广告主
     */
    public function post(): ApiOpenApi2AgentAdvTemporaryPunishPostRequest
    {
        return new ApiOpenApi2AgentAdvTemporaryPunishPostRequest($this);
    }
}
