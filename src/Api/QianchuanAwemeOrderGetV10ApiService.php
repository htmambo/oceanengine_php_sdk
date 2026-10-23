<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeOrderGetV10ApiService
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
     * 小店随心推订单列表
     */
    public function get(): ApiOpenApiV10QianchuanAwemeOrderGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeOrderGetGetRequest($this);
    }
}
