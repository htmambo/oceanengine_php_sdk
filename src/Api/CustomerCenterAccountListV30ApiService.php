<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_account_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CustomerCenterAccountListV30ApiService
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
     * 用于获取前10000条工作台账户下的管理的账户列表。（仅支持类型为CUSTOMER_ADMIN或CUSTOMER_OPERATOR的账户，查询前可先通过oauth_advertiser_get获取有授权的工作台账户）。
     */
    public function get(): ApiOpenApiV30CustomerCenterAccountListGetRequest
    {
        return new ApiOpenApiV30CustomerCenterAccountListGetRequest($this);
    }
}
