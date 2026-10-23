<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_quota_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeOrderQuotaGetV10ApiService
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
     * 查询小店随心推使用中订单配额信息
     */
    public function get(): ApiOpenApiV10QianchuanAwemeOrderQuotaGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeOrderQuotaGetGetRequest($this);
    }
}
