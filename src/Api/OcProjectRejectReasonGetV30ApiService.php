<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_reject_reason_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectRejectReasonGetV30ApiService
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
     * 获取全域推广项目审核建议
     */
    public function get(): ApiOpenApiV30OcProjectRejectReasonGetGetRequest
    {
        return new ApiOpenApiV30OcProjectRejectReasonGetGetRequest($this);
    }
}
