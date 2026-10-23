<?php

/**
 * 本文件由 go2php 生成，源: api_creative_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreativeDetailGetV30ApiService
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
     * 给定计划id，查询计划的创意设置详细信息
     */
    public function get(): ApiOpenApiV30CreativeDetailGetGetRequest
    {
        return new ApiOpenApiV30CreativeDetailGetGetRequest($this);
    }
}
