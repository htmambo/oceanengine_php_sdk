<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_advertiser_update_sale_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvAdvertiserUpdateSaleV2ApiService
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
     * 修改广告主所属销售信息
     */
    public function post(): ApiOpenApi2AgentAdvAdvertiserUpdateSalePostRequest
    {
        return new ApiOpenApi2AgentAdvAdvertiserUpdateSalePostRequest($this);
    }
}
