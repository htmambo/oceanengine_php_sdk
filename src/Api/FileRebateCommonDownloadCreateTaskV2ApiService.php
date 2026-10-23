<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_common_download_create_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileRebateCommonDownloadCreateTaskV2ApiService
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
     * 根据筛选条件下载任务,返回用户query_id,用于后续的文件下载
     */
    public function post(): ApiOpenApi2FileRebateCommonDownloadCreateTaskPostRequest
    {
        return new ApiOpenApi2FileRebateCommonDownloadCreateTaskPostRequest($this);
    }
}
