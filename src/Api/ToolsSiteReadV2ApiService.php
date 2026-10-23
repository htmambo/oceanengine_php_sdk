<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_read_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteReadV2ApiService
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
     * 通过此接口，用户可以获取站点的详细信息，包括新建或更新时传递的全量数据。
     */
    public function get(): ApiOpenApi2ToolsSiteReadGetRequest
    {
        return new ApiOpenApi2ToolsSiteReadGetRequest($this);
    }
}
