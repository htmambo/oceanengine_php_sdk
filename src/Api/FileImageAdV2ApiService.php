<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileImageAdV2ApiService
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
     * 通过此接口，用户可以上传和广告相关的素材图片，例如创意素材。
     */
    public function post(): ApiOpenApi2FileImageAdPostRequest
    {
        return new ApiOpenApi2FileImageAdPostRequest($this);
    }
}
