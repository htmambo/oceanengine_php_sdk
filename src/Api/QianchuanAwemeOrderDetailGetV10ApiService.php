<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_detail_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeOrderDetailGetV10ApiService
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
     * 小店随心推订单详情
     */
    public function get(): ApiOpenApiV10QianchuanAwemeOrderDetailGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeOrderDetailGetGetRequest($this);
    }
}
