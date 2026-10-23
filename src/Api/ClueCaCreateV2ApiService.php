<?php

/**
 * 本文件由 go2php 生成，源: api_clue_ca_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueCaCreateV2ApiService
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
     * 创建获客助手链接
     */
    public function post(): ApiOpenApi2ClueCaCreatePostRequest
    {
        return new ApiOpenApi2ClueCaCreatePostRequest($this);
    }
}
