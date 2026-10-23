<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoAdV2ApiService
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
     * 通过此接口，用户可以上传和广告相关的素材视频。
     */
    public function post(): ApiOpenApi2FileVideoAdPostRequest
    {
        return new ApiOpenApi2FileVideoAdPostRequest($this);
    }
}
