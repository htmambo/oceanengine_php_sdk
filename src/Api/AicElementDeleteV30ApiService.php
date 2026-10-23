<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicElementDeleteV30ApiService
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
     * 输入element_id，删除对应的元素(文件、文件夹)
     */
    public function post(): ApiOpenApiV30AicElementDeletePostRequest
    {
        return new ApiOpenApiV30AicElementDeletePostRequest($this);
    }
}
