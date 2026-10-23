<?php

/**
 * 本文件由 go2php 生成，源: api_brand_file_video_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandFileVideoUploadV30ApiService
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
     * AD品牌视频上传
     */
    public function post(): ApiOpenApiV30BrandFileVideoUploadPostRequest
    {
        return new ApiOpenApiV30BrandFileVideoUploadPostRequest($this);
    }
}
