<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanMaterialGetV10ApiService
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
     * 获取账户下素材列表和数据
     */
    public function get(): ApiOpenApiV10QianchuanMaterialGetGetRequest
    {
        return new ApiOpenApiV10QianchuanMaterialGetGetRequest($this);
    }
}
