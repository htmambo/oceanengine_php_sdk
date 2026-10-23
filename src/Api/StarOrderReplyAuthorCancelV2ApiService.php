<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_reply_author_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderReplyAuthorCancelV2ApiService
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
     * 达人取消任务应答
     */
    public function post(): ApiOpenApi2StarOrderReplyAuthorCancelPostRequest
    {
        return new ApiOpenApi2StarOrderReplyAuthorCancelPostRequest($this);
    }
}
