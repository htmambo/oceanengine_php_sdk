<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_attributes_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileMaterialAttributesListV2ApiService
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
     * 获取各平台素材属性列表
     */
    public function get(): ApiOpenApi2FileMaterialAttributesListGetRequest
    {
        return new ApiOpenApi2FileMaterialAttributesListGetRequest($this);
    }
}
