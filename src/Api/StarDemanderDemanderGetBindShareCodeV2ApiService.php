<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_demander_get_bind_share_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemanderDemanderGetBindShareCodeV2ApiService
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
     * 客户获取达人绑定口令码
     */
    public function get(): ApiOpenApi2StarDemanderDemanderGetBindShareCodeGetRequest
    {
        return new ApiOpenApi2StarDemanderDemanderGetBindShareCodeGetRequest($this);
    }
}
