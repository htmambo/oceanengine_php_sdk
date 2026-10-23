<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_get_demand_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmGetDemandListV2ApiService
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
     * 小程序查询任务列表
     */
    public function get(): ApiOpenApi2StarDemandOmGetDemandListGetRequest
    {
        return new ApiOpenApi2StarDemandOmGetDemandListGetRequest($this);
    }
}
