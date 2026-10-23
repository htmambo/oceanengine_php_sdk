<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_track_url_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerTrackUrlGetV2ApiService
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
     * API Description
     */
    public function get(): ApiOpenApi2EventManagerTrackUrlGetGetRequest
    {
        return new ApiOpenApi2EventManagerTrackUrlGetGetRequest($this);
    }
}
