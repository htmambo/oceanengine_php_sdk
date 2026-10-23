<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_recharge_recharge_record_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvRechargeRechargeRecordV2ApiService
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
     * 代理商充值记录查询，相关功能与代理商平台的「商务-充值记录-账户充值记录」模块对齐。
     */
    public function get(): ApiOpenApi2AgentAdvRechargeRechargeRecordGetRequest
    {
        return new ApiOpenApi2AgentAdvRechargeRechargeRecordGetRequest($this);
    }
}
