<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_suggest_delivery_time_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeOrderSuggestDeliveryTimeGetV10ApiService
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
     * 获取建议投放时长
     */
    public function get(): ApiOpenApiV10QianchuanAwemeOrderSuggestDeliveryTimeGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeOrderSuggestDeliveryTimeGetGetRequest($this);
    }
}
