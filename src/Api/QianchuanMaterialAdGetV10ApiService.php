<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_material_ad_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanMaterialAdGetV10ApiService
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
     * 获取推广列表中素材关联的计划list
     */
    public function get(): ApiOpenApiV10QianchuanMaterialAdGetGetRequest
    {
        return new ApiOpenApiV10QianchuanMaterialAdGetGetRequest($this);
    }
}
