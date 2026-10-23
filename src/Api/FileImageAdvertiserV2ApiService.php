<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_advertiser_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileImageAdvertiserV2ApiService
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
     * 资质图片上传
     */
    public function post(): ApiOpenApi2FileImageAdvertiserPostRequest
    {
        return new ApiOpenApi2FileImageAdvertiserPostRequest($this);
    }
}
