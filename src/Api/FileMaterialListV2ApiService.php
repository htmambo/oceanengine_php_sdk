<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileMaterialListV2ApiService
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
     * 获取用户素材列表，支持素材属性标签筛选/
     */
    public function get(): ApiOpenApi2FileMaterialListGetRequest
    {
        return new ApiOpenApi2FileMaterialListGetRequest($this);
    }
}
