<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_sharing_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskSharingListV30ApiService
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
     * 查询星广联投任务共享详情
     */
    public function get(): ApiOpenApiV30StardeliveryTaskSharingListGetRequest
    {
        return new ApiOpenApiV30StardeliveryTaskSharingListGetRequest($this);
    }
}
