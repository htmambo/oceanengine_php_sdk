<?php

/**
 * 本文件由 go2php 生成，源: api_star_attribute_item_event_feedback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarAttributeItemEventFeedbackV2ApiService
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
     * 精品游戏-视频信息回传
     */
    public function post(): ApiOpenApi2StarAttributeItemEventFeedbackPostRequest
    {
        return new ApiOpenApi2StarAttributeItemEventFeedbackPostRequest($this);
    }
}
