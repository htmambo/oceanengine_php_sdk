<?php

/**
 * 本文件由 go2php 生成，源: api_aic_image_mixcut_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicImageMixcutCreateV30ApiService
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
     * 可以把图片生成 AIGC 的视频并输出
     */
    public function post(): ApiOpenApiV30AicImageMixcutCreatePostRequest
    {
        return new ApiOpenApiV30AicImageMixcutCreatePostRequest($this);
    }
}
