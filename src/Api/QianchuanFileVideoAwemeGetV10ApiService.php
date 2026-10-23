<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_video_aweme_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanFileVideoAwemeGetV10ApiService
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
     * 获取抖音号下已有的视频素材，支持传入商品id，过滤拉取包含待推广商品的视频
     */
    public function get(): ApiOpenApiV10QianchuanFileVideoAwemeGetGetRequest
    {
        return new ApiOpenApiV10QianchuanFileVideoAwemeGetGetRequest($this);
    }
}
