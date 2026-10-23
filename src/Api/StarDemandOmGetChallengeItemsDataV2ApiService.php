<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_get_challenge_items_data_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmGetChallengeItemsDataV2ApiService
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
     * 小程序投稿任务结算数据
     */
    public function get(): ApiOpenApi2StarDemandOmGetChallengeItemsDataGetRequest
    {
        return new ApiOpenApi2StarDemandOmGetChallengeItemsDataGetRequest($this);
    }
}
