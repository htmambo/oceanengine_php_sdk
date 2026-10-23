<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskDetailV30ApiService
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
     * 查询星广联投任务详情
     */
    public function get(): ApiOpenApiV30StardeliveryTaskDetailGetRequest
    {
        return new ApiOpenApiV30StardeliveryTaskDetailGetRequest($this);
    }
}
