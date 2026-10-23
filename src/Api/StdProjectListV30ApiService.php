<?php

/**
 * 本文件由 go2php 生成，源: api_std_project_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StdProjectListV30ApiService
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
     * 支持获取标准投放项目列表
     */
    public function get(): ApiOpenApiV30StdProjectListGetRequest
    {
        return new ApiOpenApiV30StdProjectListGetRequest($this);
    }
}
