<?php

/**
 * 本文件由 go2php 生成，源: api_id_type_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class IdTypeGetV10ApiService
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
     * 给定一个ID, 识别出ID对应的类型
     */
    public function get(): ApiOpenApiV10IdTypeGetGetRequest
    {
        return new ApiOpenApiV10IdTypeGetGetRequest($this);
    }
}
