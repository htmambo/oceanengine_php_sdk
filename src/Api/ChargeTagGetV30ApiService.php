<?php

/**
 * 本文件由 go2php 生成，源: api_charge_tag_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ChargeTagGetV30ApiService
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
     * 查询客户是否为非入海直投客户
     */
    public function get(): ApiOpenApiV30ChargeTagGetGetRequest
    {
        return new ApiOpenApiV30ChargeTagGetGetRequest($this);
    }
}
