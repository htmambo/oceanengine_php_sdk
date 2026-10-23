<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicElementUpdateV30ApiService
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
     * 根据原料库的元素id，更新名称或者路径
     */
    public function post(): ApiOpenApiV30AicElementUpdatePostRequest
    {
        return new ApiOpenApiV30AicElementUpdatePostRequest($this);
    }
}
