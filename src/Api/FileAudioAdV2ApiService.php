<?php

/**
 * 本文件由 go2php 生成，源: api_file_audio_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileAudioAdV2ApiService
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
     * 通过此接口，用户可以上传和广告相关的音频图片，例如图文中的音频。
     */
    public function post(): ApiOpenApi2FileAudioAdPostRequest
    {
        return new ApiOpenApi2FileAudioAdPostRequest($this);
    }
}
