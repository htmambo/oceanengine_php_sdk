<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_order_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOrderListV2ApiService
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
     * 获取星图客户任务订单列表
     */
    public function get(): ApiOpenApi2StarDemandOrderListGetRequest
    {
        return new ApiOpenApi2StarDemandOrderListGetRequest($this);
    }
}
