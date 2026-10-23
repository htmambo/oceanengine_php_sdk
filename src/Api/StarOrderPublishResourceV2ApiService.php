<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_publish_resource_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderPublishResourceV2ApiService
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
     * 任务资源发布
     */
    public function post(): ApiOpenApi2StarOrderPublishResourcePostRequest
    {
        return new ApiOpenApi2StarOrderPublishResourcePostRequest($this);
    }
}
