<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_cancel_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskCancelV30ApiService
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
     * 取消星广联投任务
     */
    public function post(): ApiOpenApiV30StardeliveryTaskCancelPostRequest
    {
        return new ApiOpenApiV30StardeliveryTaskCancelPostRequest($this);
    }
}
