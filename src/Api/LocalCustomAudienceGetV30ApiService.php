<?php

/**
 * 本文件由 go2php 生成，源: api_local_custom_audience_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalCustomAudienceGetV30ApiService
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
     * 查询创编可用人群包
     */
    public function get(): ApiOpenApiV30LocalCustomAudienceGetGetRequest
    {
        return new ApiOpenApiV30LocalCustomAudienceGetGetRequest($this);
    }
}
