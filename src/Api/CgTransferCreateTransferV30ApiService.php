<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_create_transfer_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferCreateTransferV30ApiService
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
     * 发起转账，支持1:N转账、不停投转账、虚客互转
     */
    public function post(): ApiOpenApiV30CgTransferCreateTransferPostRequest
    {
        return new ApiOpenApiV30CgTransferCreateTransferPostRequest($this);
    }
}
