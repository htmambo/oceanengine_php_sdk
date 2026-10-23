<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_get_component_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderGetComponentV2ApiService
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
     * 查询任务组件
     */
    public function get(): ApiOpenApi2StarOrderGetComponentGetRequest
    {
        return new ApiOpenApi2StarOrderGetComponentGetRequest($this);
    }
}
