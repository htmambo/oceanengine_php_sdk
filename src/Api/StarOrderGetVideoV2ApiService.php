<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_get_video_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderGetVideoV2ApiService
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
     * 查询任务视频
     */
    public function get(): ApiOpenApi2StarOrderGetVideoGetRequest
    {
        return new ApiOpenApi2StarOrderGetVideoGetRequest($this);
    }
}
