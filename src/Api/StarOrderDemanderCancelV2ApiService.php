<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_demander_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderDemanderCancelV2ApiService
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
     * 任务取消
     */
    public function post(): ApiOpenApi2StarOrderDemanderCancelPostRequest
    {
        return new ApiOpenApi2StarOrderDemanderCancelPostRequest($this);
    }
}
