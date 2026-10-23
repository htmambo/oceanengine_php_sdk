<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_dbt_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerDbtGetV30ApiService
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
     * OC_获取可用dbt
     */
    public function get(): ApiOpenApiV30EventManagerDbtGetGetRequest
    {
        return new ApiOpenApiV30EventManagerDbtGetGetRequest($this);
    }
}
