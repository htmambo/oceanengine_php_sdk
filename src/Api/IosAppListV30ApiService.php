<?php

/**
 * 本文件由 go2php 生成，源: api_ios_app_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class IosAppListV30ApiService
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
     * 最新查询IOS应用列表
     */
    public function get(): ApiOpenApiV30IosAppListGetRequest
    {
        return new ApiOpenApiV30IosAppListGetRequest($this);
    }
}
