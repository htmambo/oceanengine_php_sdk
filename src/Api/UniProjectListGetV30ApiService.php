<?php

/**
 * 本文件由 go2php 生成，源: api_uni_project_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UniProjectListGetV30ApiService
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
     * 获取全域投放项目列表
     */
    public function get(): ApiOpenApiV30UniProjectListGetGetRequest
    {
        return new ApiOpenApiV30UniProjectListGetGetRequest($this);
    }
}
