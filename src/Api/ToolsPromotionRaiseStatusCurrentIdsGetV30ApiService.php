<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_status_current_ids_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionRaiseStatusCurrentIdsGetV30ApiService
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
     * 批量获取广告起量状态
     */
    public function get(): ApiOpenApiV30ToolsPromotionRaiseStatusCurrentIdsGetGetRequest
    {
        return new ApiOpenApiV30ToolsPromotionRaiseStatusCurrentIdsGetGetRequest($this);
    }
}
