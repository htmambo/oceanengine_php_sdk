<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_expand_challenge_provider_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmExpandChallengeProviderV2ApiService
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
     * 修改服务商参与范围
     */
    public function post(): ApiOpenApi2StarDemandOmExpandChallengeProviderPostRequest
    {
        return new ApiOpenApi2StarDemandOmExpandChallengeProviderPostRequest($this);
    }
}
