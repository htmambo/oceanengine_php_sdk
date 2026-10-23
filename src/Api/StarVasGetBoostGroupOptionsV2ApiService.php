<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_boost_group_options_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasGetBoostGroupOptionsV2ApiService
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
     * 查询助推组标签定向的选项值
     */
    public function get(): ApiOpenApi2StarVasGetBoostGroupOptionsGetRequest
    {
        return new ApiOpenApi2StarVasGetBoostGroupOptionsGetRequest($this);
    }
}
