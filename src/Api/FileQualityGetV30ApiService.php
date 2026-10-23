<?php

/**
 * 本文件由 go2php 生成，源: api_file_quality_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileQualityGetV30ApiService
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
     * 素材属性结果查询
     */
    public function get(): ApiOpenApiV30FileQualityGetGetRequest
    {
        return new ApiOpenApiV30FileQualityGetGetRequest($this);
    }
}
