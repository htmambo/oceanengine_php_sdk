<?php

/**
 * 本文件由 go2php 生成，源: api_clue_ca_interface_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueCaInterfaceCreateV2ApiService
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
     * 获客助手接口版创建
     */
    public function post(): ApiOpenApi2ClueCaInterfaceCreatePostRequest
    {
        return new ApiOpenApi2ClueCaInterfaceCreatePostRequest($this);
    }
}
