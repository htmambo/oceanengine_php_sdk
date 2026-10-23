<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v2_bp_transfer_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferV2BpTransferDetailGetV30ApiService
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
     * 查询单个转账单信息
     */
    public function get(): ApiOpenApiV30CgTransferV2BpTransferDetailGetGetRequest
    {
        return new ApiOpenApiV30CgTransferV2BpTransferDetailGetGetRequest($this);
    }
}
