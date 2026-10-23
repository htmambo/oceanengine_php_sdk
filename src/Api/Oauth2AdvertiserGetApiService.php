<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_advertiser_get.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class Oauth2AdvertiserGetApiService
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
     * 获取账号下已授权的管理/业务账户，如果是管理账户可再通过相关管理账户接口查询管理账户下的具体业务账户。例如工作台和代理商为管理账户，可通过工作台下业务账户列表/代理商下业务账户列表查询具体管理业务账户。
     */
    public function get(): ApiOpenApiOauth2AdvertiserGetGetRequest
    {
        return new ApiOpenApiOauth2AdvertiserGetGetRequest($this);
    }
}
