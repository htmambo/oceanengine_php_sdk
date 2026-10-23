<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v2_bp_transfer_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferV2BpTransferCreateV30ApiService
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
     * 发起转账，支持账户<->钱包、账户<->账户m:n转账，但一次转账一个账户id/钱包id不能既是减款方，也是加款方。
     * 备款钱包与虚拟广告主不支持互转
     */
    public function post(): ApiOpenApiV30CgTransferV2BpTransferCreatePostRequest
    {
        return new ApiOpenApiV30CgTransferV2BpTransferCreatePostRequest($this);
    }
}
