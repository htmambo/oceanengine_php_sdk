<?php

/**
 * 本文件由 go2php 生成，源: api_clue_ca_interface_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueCaInterfaceUpdateV2ApiService
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
     * 获客助手接口版更新
     */
    public function post(): ApiOpenApi2ClueCaInterfaceUpdatePostRequest
    {
        return new ApiOpenApi2ClueCaInterfaceUpdatePostRequest($this);
    }
}
