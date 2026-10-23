<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeOrderCreateV10ApiService
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
     * 创建小店随心推订单
     */
    public function post(): ApiOpenApiV10QianchuanAwemeOrderCreatePostRequest
    {
        return new ApiOpenApiV10QianchuanAwemeOrderCreatePostRequest($this);
    }
}
