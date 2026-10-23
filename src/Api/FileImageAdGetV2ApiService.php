<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_ad_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileImageAdGetV2ApiService
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
     * 通过此接口，用户可以查询获取同主体下的广告主图片素材信息。
     */
    public function get(): ApiOpenApi2FileImageAdGetGetRequest
    {
        return new ApiOpenApi2FileImageAdGetGetRequest($this);
    }
}
