<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileImageDeleteV30ApiService
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
     * 通过此接口，用户可以批量删除广告主下创意素材库的图片。
     */
    public function post(): ApiOpenApiV30FileImageDeletePostRequest
    {
        return new ApiOpenApiV30FileImageDeletePostRequest($this);
    }
}
