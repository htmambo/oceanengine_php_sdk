<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_upload_search_item_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderUploadSearchItemV2ApiService
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
     * 回传水下视频用于口令归因
     */
    public function post(): ApiOpenApi2StarMcnProviderUploadSearchItemPostRequest
    {
        return new ApiOpenApi2StarMcnProviderUploadSearchItemPostRequest($this);
    }
}
