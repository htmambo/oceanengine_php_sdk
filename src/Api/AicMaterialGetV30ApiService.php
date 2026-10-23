<?php

/**
 * 本文件由 go2php 生成，源: api_aic_material_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicMaterialGetV30ApiService
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
     * 获取组织或者代理商下面已保存的即创素材(视频)
     */
    public function get(): ApiOpenApiV30AicMaterialGetGetRequest
    {
        return new ApiOpenApiV30AicMaterialGetGetRequest($this);
    }
}
