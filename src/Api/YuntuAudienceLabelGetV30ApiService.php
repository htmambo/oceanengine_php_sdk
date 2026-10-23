<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_label_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class YuntuAudienceLabelGetV30ApiService
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
     * 删除当前用户通过 API 接口创建的数据工厂人群标签。
     */
    public function get(): ApiOpenApiV30YuntuAudienceLabelGetGetRequest
    {
        return new ApiOpenApiV30YuntuAudienceLabelGetGetRequest($this);
    }
}
