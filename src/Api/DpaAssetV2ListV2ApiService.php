<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_asset_v2_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaAssetV2ListV2ApiService
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
     * 该接口主要查询汽车行业投放条件信息，根据新线索商品id查询投放条件列表
     */
    public function post(): ApiOpenApi2DpaAssetV2ListPostRequest
    {
        return new ApiOpenApi2DpaAssetV2ListPostRequest($this);
    }
}
