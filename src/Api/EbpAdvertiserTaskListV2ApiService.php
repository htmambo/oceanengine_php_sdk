<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpAdvertiserTaskListV2ApiService
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
     * 查询异步任务列表
     */
    public function get(): ApiOpenApi2EbpAdvertiserTaskListGetRequest
    {
        return new ApiOpenApi2EbpAdvertiserTaskListGetRequest($this);
    }
}
