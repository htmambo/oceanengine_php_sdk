<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_material_suggestion_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAdMaterialSuggestionV10ApiService
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
     * 获取计划下素材审核建议
     */
    public function get(): ApiOpenApiV10QianchuanAdMaterialSuggestionGetRequest
    {
        return new ApiOpenApiV10QianchuanAdMaterialSuggestionGetRequest($this);
    }
}
