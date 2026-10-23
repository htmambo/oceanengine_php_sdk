<?php

/**
 * 本文件由 go2php 生成，源: api_star_order_get_cancel_amount_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarOrderGetCancelAmountV2ApiService
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
     * 获取任务取消赔付金额
     */
    public function get(): ApiOpenApi2StarOrderGetCancelAmountGetRequest
    {
        return new ApiOpenApi2StarOrderGetCancelAmountGetRequest($this);
    }
}
