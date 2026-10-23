<?php

/**
 * 本文件由 go2php 生成，源: api_local_oc_project_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalOcProjectListV30ApiService
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
     * oc推广管理项目列表
     */
    public function get(): ApiOpenApiV30LocalOcProjectListGetRequest
    {
        return new ApiOpenApiV30LocalOcProjectListGetRequest($this);
    }
}
