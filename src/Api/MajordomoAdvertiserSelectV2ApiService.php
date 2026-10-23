<?php

/**
 * 本文件由 go2php 生成，源: api_majordomo_advertiser_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class MajordomoAdvertiserSelectV2ApiService
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
     * 获取纵横组织下的广告主ID列表
     */
    public function get(): ApiOpenApi2MajordomoAdvertiserSelectGetRequest
    {
        return new ApiOpenApi2MajordomoAdvertiserSelectGetRequest($this);
    }
}
