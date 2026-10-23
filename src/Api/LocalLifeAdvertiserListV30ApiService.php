<?php

/**
 * 本文件由 go2php 生成，源: api_local_life_advertiser_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalLifeAdvertiserListV30ApiService
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
     * 通过来客账户查关联本地账户接口
     */
    public function get(): ApiOpenApiV30LocalLifeAdvertiserListGetRequest
    {
        return new ApiOpenApiV30LocalLifeAdvertiserListGetRequest($this);
    }
}
