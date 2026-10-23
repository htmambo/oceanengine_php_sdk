<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_label_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class YuntuAudienceLabelCreateV30ApiService
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
     * 创建数据工厂人群标签，支持内容人群标签、商品人群标签、搜索人群标签。
     */
    public function post(): ApiOpenApiV30YuntuAudienceLabelCreatePostRequest
    {
        return new ApiOpenApiV30YuntuAudienceLabelCreatePostRequest($this);
    }
}
