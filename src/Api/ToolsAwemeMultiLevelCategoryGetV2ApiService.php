<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_multi_level_category_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeMultiLevelCategoryGetV2ApiService
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
    public function get(): ApiOpenApi2ToolsAwemeMultiLevelCategoryGetGetRequest
    {
        return new ApiOpenApi2ToolsAwemeMultiLevelCategoryGetGetRequest($this);
    }
}
