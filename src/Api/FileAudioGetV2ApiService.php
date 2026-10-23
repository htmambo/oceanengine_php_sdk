<?php

/**
 * 本文件由 go2php 生成，源: api_file_audio_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileAudioGetV2ApiService
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
     * 根据此接口，客户可以获取他的音频库列表
     */
    public function get(): ApiOpenApi2FileAudioGetGetRequest
    {
        return new ApiOpenApi2FileAudioGetGetRequest($this);
    }
}
