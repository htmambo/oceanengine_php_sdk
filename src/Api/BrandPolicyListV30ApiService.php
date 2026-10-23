<?php

/**
 * 本文件由 go2php 生成，源: api_brand_policy_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandPolicyListV30ApiService
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
     * 查询政策
     */
    public function get(): ApiOpenApiV30BrandPolicyListGetRequest
    {
        return new ApiOpenApiV30BrandPolicyListGetRequest($this);
    }
}
