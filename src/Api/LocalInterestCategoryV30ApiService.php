<?php

/**
 * 本文件由 go2php 生成，源: api_local_interest_category_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalInterestCategoryV30ApiService
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
     * 兴趣类目查询
     */
    public function get(): ApiOpenApiV30LocalInterestCategoryGetRequest
    {
        return new ApiOpenApiV30LocalInterestCategoryGetRequest($this);
    }
}
