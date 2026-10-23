<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskListV30ApiService
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
     * 获取星广联投任务列表
     */
    public function get(): ApiOpenApiV30StardeliveryTaskListGetRequest
    {
        return new ApiOpenApiV30StardeliveryTaskListGetRequest($this);
    }
}
