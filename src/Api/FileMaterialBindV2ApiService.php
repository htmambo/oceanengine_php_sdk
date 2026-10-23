<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_bind_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileMaterialBindV2ApiService
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
     * 素材推送
     */
    public function post(): ApiOpenApi2FileMaterialBindPostRequest
    {
        return new ApiOpenApi2FileMaterialBindPostRequest($this);
    }
}
