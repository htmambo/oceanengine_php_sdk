<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_unshare_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskUnshareV30ApiService
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
     * 取消广告主adv发起的星广联投任务共享
     */
    public function post(): ApiOpenApiV30StardeliveryTaskUnsharePostRequest
    {
        return new ApiOpenApiV30StardeliveryTaskUnsharePostRequest($this);
    }
}
