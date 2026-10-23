<?php

/**
 * 本文件由 go2php 生成，源: api_spi_task_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SpiTaskGetV2ApiService
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
     * 获取推送数据
     */
    public function get(): ApiOpenApi2SpiTaskGetGetRequest
    {
        return new ApiOpenApi2SpiTaskGetGetRequest($this);
    }
}
