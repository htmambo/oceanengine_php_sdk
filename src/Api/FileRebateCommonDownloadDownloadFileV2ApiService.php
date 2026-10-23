<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_common_download_download_file_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileRebateCommonDownloadDownloadFileV2ApiService
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
     * 通过指定的task_id,获取对应的数据明细文件
     */
    public function get(): ApiOpenApi2FileRebateCommonDownloadDownloadFileGetRequest
    {
        return new ApiOpenApi2FileRebateCommonDownloadDownloadFileGetRequest($this);
    }
}
