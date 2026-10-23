<?php

/**
 * 本文件由 go2php 生成，源: api_agent_credit_charge_submit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentCreditChargeSubmitV2ApiService
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
     * 充值接口分为三步, 包含校验能否充值接口、提交授信充值接口、查询充值结果接口，本接口为第二步；提交之前需要校验能否充值，提交之后，通过轮训查询充值结果
     */
    public function post(): ApiOpenApi2AgentCreditChargeSubmitPostRequest
    {
        return new ApiOpenApi2AgentCreditChargeSubmitPostRequest($this);
    }
}
