<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_recurit_provider_get_task_order_list_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnRecuritProviderGetTaskOrderListGetV2ApiService
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
     * 招募服务商任务信息查询
     */
    public function get(): ApiOpenApi2StarMcnRecuritProviderGetTaskOrderListGetGetRequest
    {
        return new ApiOpenApi2StarMcnRecuritProviderGetTaskOrderListGetGetRequest($this);
    }
}
