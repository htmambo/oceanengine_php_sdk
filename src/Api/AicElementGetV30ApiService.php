<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicElementGetV30ApiService
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
     * 通过此接口获取，输入账户ID、文件路径、元素类型等，查看原料
     */
    public function get(): ApiOpenApiV30AicElementGetGetRequest
    {
        return new ApiOpenApiV30AicElementGetGetRequest($this);
    }
}
