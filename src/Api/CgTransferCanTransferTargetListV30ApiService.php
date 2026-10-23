<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_can_transfer_target_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferCanTransferTargetListV30ApiService
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
     * 查询当前账户(锚定账户)可以互相转账的账户列表
     */
    public function get(): ApiOpenApiV30CgTransferCanTransferTargetListGetRequest
    {
        return new ApiOpenApiV30CgTransferCanTransferTargetListGetRequest($this);
    }
}
