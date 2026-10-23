<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_handsel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteHandselV2ApiService
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
     * 通过此接口，用户可以实现站点的转赠功能，将某一广告主的站点共享给其他特定的广告主，转赠成功后，广告主们拥有站点的共同使用权。 不限制主体，同广告主不能进行转赠操作
     */
    public function post(): ApiOpenApi2ToolsSiteHandselPostRequest
    {
        return new ApiOpenApi2ToolsSiteHandselPostRequest($this);
    }
}
