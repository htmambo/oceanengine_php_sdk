<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteCreateV2ApiService
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
     * 通过此接口，用户可以创建站点（用于存放落地页），之后才能创建落地页。创建站点接口会返回"code_0"，代表站点创建成功。
     */
    public function post(): ApiOpenApi2ToolsSiteCreatePostRequest
    {
        return new ApiOpenApi2ToolsSiteCreatePostRequest($this);
    }
}
