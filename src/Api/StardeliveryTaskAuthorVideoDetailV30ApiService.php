<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_author_video_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskAuthorVideoDetailV30ApiService
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
     * 获取星广联投任务下达人视频信息
     */
    public function get(): ApiOpenApiV30StardeliveryTaskAuthorVideoDetailGetRequest
    {
        return new ApiOpenApiV30StardeliveryTaskAuthorVideoDetailGetRequest($this);
    }
}
