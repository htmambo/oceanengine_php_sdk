<?php

/**
 * 本文件由 go2php 生成，源: api_recommend_video_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class RecommendVideoListV30ApiService
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
     * 获取推荐素材视频
     */
    public function post(): ApiOpenApiV30RecommendVideoListPostRequest
    {
        return new ApiOpenApiV30RecommendVideoListPostRequest($this);
    }
}
