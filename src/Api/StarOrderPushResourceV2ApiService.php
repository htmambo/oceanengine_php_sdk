<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_push_resource_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderPushResourceV2ApiService
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
     * 任务资源推送
     */
    public function post(): ApiOpenApi2StarOrderPushResourcePostRequest
    {
        return new ApiOpenApi2StarOrderPushResourcePostRequest($this);
    }
}
