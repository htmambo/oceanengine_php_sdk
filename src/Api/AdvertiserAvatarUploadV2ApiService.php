<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_avatar_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserAvatarUploadV2ApiService
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
    public function post(): ApiOpenApi2AdvertiserAvatarUploadPostRequest
    {
        return new ApiOpenApi2AdvertiserAvatarUploadPostRequest($this);
    }
}
