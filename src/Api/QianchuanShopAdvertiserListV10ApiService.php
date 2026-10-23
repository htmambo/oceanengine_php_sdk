<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_shop_advertiser_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanShopAdvertiserListV10ApiService
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
     * 用于获取店铺账户下的广告主账号列表。当授权账户为PLATFORM_ROLE_SHOP_ACCOUNT抖音店铺账户时，可通过当前工具查询店铺下管理的千川广告主账号。仅当账户返回额外权限列表包含随心推权限时，对应账户支持操作随心推业务接口。
     */
    public function get(): ApiOpenApiV10QianchuanShopAdvertiserListGetRequest
    {
        return new ApiOpenApiV10QianchuanShopAdvertiserListGetRequest($this);
    }
}
