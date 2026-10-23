<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class YuntuAudienceInfoGetV30ApiService
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
     * 查询自定义人群包
     */
    public function get(): ApiOpenApiV30YuntuAudienceInfoGetGetRequest
    {
        return new ApiOpenApiV30YuntuAudienceInfoGetGetRequest($this);
    }
}
