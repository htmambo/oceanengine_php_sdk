<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_get_challenge_dispatched_provider_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmGetChallengeDispatchedProviderListV2ApiService
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
     * 查询任务派单服务商列表
     */
    public function get(): ApiOpenApi2StarDemandOmGetChallengeDispatchedProviderListGetRequest
    {
        return new ApiOpenApi2StarDemandOmGetChallengeDispatchedProviderListGetRequest($this);
    }
}
