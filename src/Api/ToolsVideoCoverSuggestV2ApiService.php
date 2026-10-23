<?php

/**
 * 本文件由 go2php 生成，源: api_tools_video_cover_suggest_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsVideoCoverSuggestV2ApiService
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
     * 通过此接口，用户可以获取针对素材视频推荐的智能封面。智能封面是通过提取视频关键帧筛选出推荐封面，帮助发现视频内优质封面素材。
     */
    public function get(): ApiOpenApi2ToolsVideoCoverSuggestGetRequest
    {
        return new ApiOpenApi2ToolsVideoCoverSuggestGetRequest($this);
    }
}
