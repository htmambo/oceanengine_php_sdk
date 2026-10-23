<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_get_registered_ip_acts_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemanderGetRegisteredIpActsV2ApiService
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
     * 查询已报名IP活动
     */
    public function get(): ApiOpenApi2StarDemanderGetRegisteredIpActsGetRequest
    {
        return new ApiOpenApi2StarDemanderGetRegisteredIpActsGetRequest($this);
    }
}
