<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_get_live_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderGetLiveV2ApiService
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
     * 查询任务直播数据
     */
    public function get(): ApiOpenApi2StarOrderGetLiveGetRequest
    {
        return new ApiOpenApi2StarOrderGetLiveGetRequest($this);
    }
}
