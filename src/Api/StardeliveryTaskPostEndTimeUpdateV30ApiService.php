<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_post_end_time_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskPostEndTimeUpdateV30ApiService
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
     * 更新星广联投任务截止时间
     */
    public function post(): ApiOpenApiV30StardeliveryTaskPostEndTimeUpdatePostRequest
    {
        return new ApiOpenApiV30StardeliveryTaskPostEndTimeUpdatePostRequest($this);
    }
}
