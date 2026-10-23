<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_event_configs_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerEventConfigsGetV2ApiService
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
     * 此接口用于查询资产下已经创建的事件及其相关信息
     */
    public function get(): ApiOpenApi2EventManagerEventConfigsGetGetRequest
    {
        return new ApiOpenApi2EventManagerEventConfigsGetGetRequest($this);
    }
}
