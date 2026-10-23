<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_submit_export_boost_item_group_data_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasSubmitExportBoostItemGroupDataV2ApiService
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
     * 发起导出投中加热组数据
     */
    public function post(): ApiOpenApi2StarVasSubmitExportBoostItemGroupDataPostRequest
    {
        return new ApiOpenApi2StarVasSubmitExportBoostItemGroupDataPostRequest($this);
    }
}
