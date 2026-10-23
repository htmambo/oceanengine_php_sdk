<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_common_download_get_download_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileRebateCommonDownloadGetDownloadTaskListV2ApiService
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
     * 查询指定query_id的所有下载任务
     */
    public function get(): ApiOpenApi2FileRebateCommonDownloadGetDownloadTaskListGetRequest
    {
        return new ApiOpenApi2FileRebateCommonDownloadGetDownloadTaskListGetRequest($this);
    }
}
