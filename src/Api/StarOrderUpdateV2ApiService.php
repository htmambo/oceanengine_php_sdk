<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderUpdateV2ApiService
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
     * 任务修改
     */
    public function post(): ApiOpenApi2StarOrderUpdatePostRequest
    {
        return new ApiOpenApi2StarOrderUpdatePostRequest($this);
    }
}
