<?php

/**
 * 本文件由 go2php 生成，源: api_agent_prepay_charge_generate_remittance_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentPrepayChargeGenerateRemittanceCodeV2ApiService
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
     * 代理商进行预付充值生成汇款码记录，并透传汇款码信息给用户
     */
    public function post(): ApiOpenApi2AgentPrepayChargeGenerateRemittanceCodePostRequest
    {
        return new ApiOpenApi2AgentPrepayChargeGenerateRemittanceCodePostRequest($this);
    }
}
