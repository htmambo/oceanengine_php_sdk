<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileMaterialDetailV2ApiService
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
     * 素材信息查询
     */
    public function get(): ApiOpenApi2FileMaterialDetailGetRequest
    {
        return new ApiOpenApi2FileMaterialDetailGetRequest($this);
    }
}
