<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_data_source_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpDataSourceUpdateV2ApiService
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
     * API Description
     */
    public function post(): ApiOpenApi2DmpDataSourceUpdatePostRequest
    {
        return new ApiOpenApi2DmpDataSourceUpdatePostRequest($this);
    }
}
