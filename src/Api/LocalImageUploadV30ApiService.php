<?php

/**
 * 本文件由 go2php 生成，源: api_local_image_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImageUploadV30ApiService
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
     * 上传图片素材，视频封面图、推广卡片配图等
     */
    public function post(): ApiOpenApiV30LocalImageUploadPostRequest
    {
        return new ApiOpenApiV30LocalImageUploadPostRequest($this);
    }
}
