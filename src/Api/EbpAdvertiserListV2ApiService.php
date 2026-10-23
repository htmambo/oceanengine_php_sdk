<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpAdvertiserListV2ApiService
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
     * 实时拉取EBP下账户列表
     */
    public function get(): ApiOpenApi2EbpAdvertiserListGetRequest
    {
        return new ApiOpenApi2EbpAdvertiserListGetRequest($this);
    }
}
