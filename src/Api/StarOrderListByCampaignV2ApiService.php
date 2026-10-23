<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_list_by_campaign_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderListByCampaignV2ApiService
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
     * 根据需求获取任务列表
     */
    public function get(): ApiOpenApi2StarOrderListByCampaignGetRequest
    {
        return new ApiOpenApi2StarOrderListByCampaignGetRequest($this);
    }
}
