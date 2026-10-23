<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_set_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionRaiseSetV30ApiService
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
     * 开启/更新一键起量(传空代表删除)
     */
    public function post(): ApiOpenApiV30ToolsPromotionRaiseSetPostRequest
    {
        return new ApiOpenApiV30ToolsPromotionRaiseSetPostRequest($this);
    }
}
