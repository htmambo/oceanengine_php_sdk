<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_data_source_read_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpDataSourceReadV2ApiService
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
     * 数据源详细信息
     */
    public function get(): ApiOpenApi2DmpDataSourceReadGetRequest
    {
        return new ApiOpenApi2DmpDataSourceReadGetRequest($this);
    }
}
