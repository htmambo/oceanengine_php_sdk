<?php

/**
 * 本文件由 go2php 生成，源: api_star_attribute_user_event_feedback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarAttributeUserEventFeedbackV2ApiService
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
     * 用户事件回传接口
     */
    public function post(): ApiOpenApi2StarAttributeUserEventFeedbackPostRequest
    {
        return new ApiOpenApi2StarAttributeUserEventFeedbackPostRequest($this);
    }
}
