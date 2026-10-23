<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_advertiser_transferable_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CustomerCenterAdvertiserTransferableListV2ApiService
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
     * 本接口用于查询管家或者广告主的可转账列表
     * 注意：暂不支持代理商角色账号获取
     * 报错：账户角色不能为一代或者二代代理商
     */
    public function get(): ApiOpenApi2CustomerCenterAdvertiserTransferableListGetRequest
    {
        return new ApiOpenApi2CustomerCenterAdvertiserTransferableListGetRequest($this);
    }
}
