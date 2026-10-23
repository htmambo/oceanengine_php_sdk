<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_avatar_submit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserAvatarSubmitV2ApiService
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
     * 上传广告主头像
     */
    public function post(): ApiOpenApi2AdvertiserAvatarSubmitPostRequest
    {
        return new ApiOpenApi2AdvertiserAvatarSubmitPostRequest($this);
    }
}
