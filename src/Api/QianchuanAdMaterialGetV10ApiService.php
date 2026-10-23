<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdMaterialGetV10ApiService
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
     * 获取计划下的素材信息，包括素材的元信息，审核状态，关联创意ID，派生信息，是否删除等。
     */
    public function get(): ApiOpenApiV10QianchuanAdMaterialGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAdMaterialGetGetRequest($this);
    }
}
