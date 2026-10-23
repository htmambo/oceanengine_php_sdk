<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_detail_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeUniPromotionOrderDetailV10ApiService
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
     * 获取随心推全域订单详情
     */
    public function get(): ApiOpenApiV10QianchuanAwemeUniPromotionOrderDetailGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeUniPromotionOrderDetailGetRequest($this);
    }
}
