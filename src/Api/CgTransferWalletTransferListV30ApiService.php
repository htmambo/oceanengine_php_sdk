<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_wallet_transfer_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferWalletTransferListV30ApiService
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
     * 通过筛选条件捞取转账记录
     */
    public function get(): ApiOpenApiV30CgTransferWalletTransferListGetRequest
    {
        return new ApiOpenApiV30CgTransferWalletTransferListGetRequest($this);
    }
}
