<?php

/**
 * 本文件由 go2php 生成，源: api_local_action_category_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalActionCategoryV30ApiService
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
     * 行为类目查询
     */
    public function get(): ApiOpenApiV30LocalActionCategoryGetRequest
    {
        return new ApiOpenApiV30LocalActionCategoryGetRequest($this);
    }
}
