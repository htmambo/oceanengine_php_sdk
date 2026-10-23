<?php

/**
 * 本文件由 go2php 生成，源: api_aic_video_mixcut_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicVideoMixcutCreateV30ApiService
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
     * 输入视频原料、设定配置项（如制定字体、音乐），输出含ai脚本的视频成片
     */
    public function post(): ApiOpenApiV30AicVideoMixcutCreatePostRequest
    {
        return new ApiOpenApiV30AicVideoMixcutCreatePostRequest($this);
    }
}
