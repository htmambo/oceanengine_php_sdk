<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_suggest_delivery_time_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10ApiService
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
     * 获取随心推全域续费建议延长时长
     */
    public function get(): ApiOpenApiV10QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetGetRequest($this);
    }
}
