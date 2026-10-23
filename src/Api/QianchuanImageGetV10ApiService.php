<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_image_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanImageGetV10ApiService
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
     * 1
     */
    public function get(): ApiOpenApiV10QianchuanImageGetGetRequest
    {
        return new ApiOpenApiV10QianchuanImageGetGetRequest($this);
    }
}
