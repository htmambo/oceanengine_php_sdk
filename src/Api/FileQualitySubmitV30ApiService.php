<?php

/**
 * 本文件由 go2php 生成，源: api_file_quality_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileQualitySubmitV30ApiService
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
     * 素材属性提交分析
     */
    public function post(): ApiOpenApiV30FileQualitySubmitPostRequest
    {
        return new ApiOpenApiV30FileQualitySubmitPostRequest($this);
    }
}
