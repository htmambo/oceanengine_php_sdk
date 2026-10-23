<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_info_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class YuntuAudienceInfoCreateV30ApiService
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
     * 创建自定义人群包
     */
    public function post(): ApiOpenApiV30YuntuAudienceInfoCreatePostRequest
    {
        return new ApiOpenApiV30YuntuAudienceInfoCreatePostRequest($this);
    }
}
