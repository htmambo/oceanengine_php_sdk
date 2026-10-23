<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v2_bp_can_transfer_balance_between_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30ApiService
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
     * 查询转出方与转入方之间最大可转金额，支持查询M:N。暂时只支持备款钱包<->投放账户场景
     */
    public function get(): ApiOpenApiV30CgTransferV2BpCanTransferBalanceBetweenAccountGetGetRequest
    {
        return new ApiOpenApiV30CgTransferV2BpCanTransferBalanceBetweenAccountGetGetRequest($this);
    }
}
