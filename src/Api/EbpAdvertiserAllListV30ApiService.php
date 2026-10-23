<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_all_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpAdvertiserAllListV30ApiService
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
     * 获取升级版巨量引擎工作台下全量账户
     */
    public function get(): ApiOpenApiV30EbpAdvertiserAllListGetRequest
    {
        return new ApiOpenApiV30EbpAdvertiserAllListGetRequest($this);
    }
}
