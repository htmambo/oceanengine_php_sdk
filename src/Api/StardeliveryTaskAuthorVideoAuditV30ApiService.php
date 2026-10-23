<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_author_video_audit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StardeliveryTaskAuthorVideoAuditV30ApiService
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
     * 审核星广联投视频
     */
    public function post(): ApiOpenApiV30StardeliveryTaskAuthorVideoAuditPostRequest
    {
        return new ApiOpenApiV30StardeliveryTaskAuthorVideoAuditPostRequest($this);
    }
}
