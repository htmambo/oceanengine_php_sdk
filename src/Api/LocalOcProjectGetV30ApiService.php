<?php

/**
 * 本文件由 go2php 生成，源: api_local_oc_project_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalOcProjectGetV30ApiService
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
     * 获取OC项目详情
     */
    public function get(): ApiOpenApiV30LocalOcProjectGetGetRequest
    {
        return new ApiOpenApiV30LocalOcProjectGetGetRequest($this);
    }
}
