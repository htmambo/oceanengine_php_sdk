<?php

/**
 * 本文件由 go2php 生成，源: api_local_oc_material_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalOcMaterialGetV30ApiService
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
     * 根据OC项目下的素材，支持分页
     */
    public function get(): ApiOpenApiV30LocalOcMaterialGetGetRequest
    {
        return new ApiOpenApiV30LocalOcMaterialGetGetRequest($this);
    }
}
