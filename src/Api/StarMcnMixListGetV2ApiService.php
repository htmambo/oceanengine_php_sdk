<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_mix_list_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnMixListGetV2ApiService
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
     * 撮合服务商-获取剧集维度投后数据
     */
    public function get(): ApiOpenApi2StarMcnMixListGetGetRequest
    {
        return new ApiOpenApi2StarMcnMixListGetGetRequest($this);
    }
}
