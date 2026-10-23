<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_reject_reason_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalPromotionRejectReasonGetV30ApiService
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
     * 批量获取广告审核建议
     */
    public function get(): ApiOpenApiV30LocalPromotionRejectReasonGetGetRequest
    {
        return new ApiOpenApiV30LocalPromotionRejectReasonGetGetRequest($this);
    }
}
