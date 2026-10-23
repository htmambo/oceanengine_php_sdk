<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_export_boost_item_group_result_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasGetExportBoostItemGroupResultV2ApiService
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
     * 查询导出投中加热组数据
     */
    public function get(): ApiOpenApi2StarVasGetExportBoostItemGroupResultGetRequest
    {
        return new ApiOpenApi2StarVasGetExportBoostItemGroupResultGetRequest($this);
    }
}
