<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpAdvertiserTaskCreateV2ApiService
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
     * 创建离线拉取账户任务
     */
    public function post(): ApiOpenApi2EbpAdvertiserTaskCreatePostRequest
    {
        return new ApiOpenApi2EbpAdvertiserTaskCreatePostRequest($this);
    }
}
