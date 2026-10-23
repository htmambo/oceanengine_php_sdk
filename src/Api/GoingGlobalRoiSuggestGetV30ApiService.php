<?php

/**
 * 本文件由 go2php 生成，源: api_going_global_roi_suggest_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class GoingGlobalRoiSuggestGetV30ApiService
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
     * 查询出海项目建议ROI
     */
    public function get(): ApiOpenApiV30GoingGlobalRoiSuggestGetGetRequest
    {
        return new ApiOpenApiV30GoingGlobalRoiSuggestGetGetRequest($this);
    }
}
