<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_advertiser_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CustomerCenterAdvertiserListV2ApiService
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
     * 获取当前纵横组织下的资产账户列表（广告主，企业号），如果纵横组织下还有子级组织账号，会把cc_account_id下所有可操作的资产账户全量返回
     */
    public function get(): ApiOpenApi2CustomerCenterAdvertiserListGetRequest
    {
        return new ApiOpenApi2CustomerCenterAdvertiserListGetRequest($this);
    }
}
