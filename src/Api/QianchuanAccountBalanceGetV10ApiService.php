<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_account_balance_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAccountBalanceGetV10ApiService
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
     * 获取账户余额，返回通用，竞价，品牌余额
     */
    public function get(): ApiOpenApiV10QianchuanAccountBalanceGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAccountBalanceGetGetRequest($this);
    }
}
