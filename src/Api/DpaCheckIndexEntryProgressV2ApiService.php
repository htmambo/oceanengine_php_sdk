<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_check_index_entry_progress_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaCheckIndexEntryProgressV2ApiService
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
     * 用于查询xml的录入是否完成
     */
    public function post(): ApiOpenApi2DpaCheckIndexEntryProgressPostRequest
    {
        return new ApiOpenApi2DpaCheckIndexEntryProgressPostRequest($this);
    }
}
