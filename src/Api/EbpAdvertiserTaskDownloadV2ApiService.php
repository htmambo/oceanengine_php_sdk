<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_task_download_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpAdvertiserTaskDownloadV2ApiService
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
     * 下载异步任务结果
     */
    public function get(): ApiOpenApi2EbpAdvertiserTaskDownloadGetRequest
    {
        return new ApiOpenApi2EbpAdvertiserTaskDownloadGetRequest($this);
    }
}
