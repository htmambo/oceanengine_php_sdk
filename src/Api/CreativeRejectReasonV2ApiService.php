<?php

/**
 * 本文件由 go2php 生成，源: api_creative_reject_reason_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreativeRejectReasonV2ApiService
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
     * 获取创意审核建议
     */
    public function get(): ApiOpenApi2CreativeRejectReasonGetRequest
    {
        return new ApiOpenApi2CreativeRejectReasonGetRequest($this);
    }
}
