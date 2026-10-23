<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_video_by_aweme_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanVideoByAwemeGetV10ApiService
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
     * 通过抖音主页视频 ID/URL 查询对应的本地上传视频信息，包含已隐藏视频
     */
    public function get(): ApiOpenApiV10QianchuanVideoByAwemeGetGetRequest
    {
        return new ApiOpenApiV10QianchuanVideoByAwemeGetGetRequest($this);
    }
}
