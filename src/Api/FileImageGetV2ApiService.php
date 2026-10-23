<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileImageGetV2ApiService
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
     * 通过此接口，用户可以获取经过一定条件过滤后的广告主下创意素材库的图片及图片信息。
     */
    public function get(): ApiOpenApi2FileImageGetGetRequest
    {
        return new ApiOpenApi2FileImageGetGetRequest($this);
    }
}
