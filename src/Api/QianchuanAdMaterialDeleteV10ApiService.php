<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_material_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdMaterialDeleteV10ApiService
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
     * 删除广告计划下的素材
     */
    public function post(): ApiOpenApiV10QianchuanAdMaterialDeletePostRequest
    {
        return new ApiOpenApiV10QianchuanAdMaterialDeletePostRequest($this);
    }
}
