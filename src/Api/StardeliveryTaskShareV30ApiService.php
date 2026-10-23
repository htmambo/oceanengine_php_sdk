<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_share_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskShareV30ApiService
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
     * 广告主adv发起星图任务的共享，共享给其他adv
     */
    public function post(): ApiOpenApiV30StardeliveryTaskSharePostRequest
    {
        return new ApiOpenApiV30StardeliveryTaskSharePostRequest($this);
    }
}
