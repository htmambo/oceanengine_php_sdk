<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalProjectDetailV30ApiService
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
     * 项目详情接口，返回项目各种设置详情信息
     */
    public function get(): ApiOpenApiV30LocalProjectDetailGetRequest
    {
        return new ApiOpenApiV30LocalProjectDetailGetRequest($this);
    }
}
