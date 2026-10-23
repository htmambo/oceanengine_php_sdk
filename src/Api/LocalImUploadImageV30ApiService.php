<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_upload_image_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImUploadImageV30ApiService
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
     * 服务商上传图片资源，在发送消息时，支持发送图片
     */
    public function post(): ApiOpenApiV30LocalImUploadImagePostRequest
    {
        return new ApiOpenApiV30LocalImUploadImagePostRequest($this);
    }
}
