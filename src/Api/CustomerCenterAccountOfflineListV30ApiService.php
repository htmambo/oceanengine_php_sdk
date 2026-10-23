<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_account_offline_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CustomerCenterAccountOfflineListV30ApiService
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
     * 用于获取超过10000条工作台账户下的管理的账户列表。（仅支持类型为CUSTOMER_ADMIN或CUSTOMER_OPERATOR的账户）。
     */
    public function get(): ApiOpenApiV30CustomerCenterAccountOfflineListGetRequest
    {
        return new ApiOpenApiV30CustomerCenterAccountOfflineListGetRequest($this);
    }
}
