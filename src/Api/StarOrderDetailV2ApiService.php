<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderDetailV2ApiService
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
     * 任务信息查询
     */
    public function get(): ApiOpenApi2StarOrderDetailGetRequest
    {
        return new ApiOpenApi2StarOrderDetailGetRequest($this);
    }
}
