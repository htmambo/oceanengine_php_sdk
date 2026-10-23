<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteGetV2ApiService
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
     * 通过此接口，用户可以获取广告主建站列表。
     * 列表栏包括建站ID、建站名称、建站状态、建站类型、建站类别、站点缩略图等信息。
     */
    public function get(): ApiOpenApi2ToolsSiteGetGetRequest
    {
        return new ApiOpenApi2ToolsSiteGetGetRequest($this);
    }
}
