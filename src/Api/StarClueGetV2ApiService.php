<?php

/**
 * 本文件由 go2php 生成，源: api_star_clue_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarClueGetV2ApiService
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
     * 获取星图订单投后线索
     */
    public function get(): ApiOpenApi2StarClueGetGetRequest
    {
        return new ApiOpenApi2StarClueGetGetRequest($this);
    }
}
