<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_contract_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnContractChallengeV2ApiService
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
     * 机构承包-传入任务分佣比例及接收任务
     */
    public function post(): ApiOpenApi2StarMcnContractChallengePostRequest
    {
        return new ApiOpenApi2StarMcnContractChallengePostRequest($this);
    }
}
