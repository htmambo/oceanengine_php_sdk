<?php

/**
 * 本文件由 go2php 生成，源: api_clue_ca_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueCaUpdateV2ApiService
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
     * 更新获客助手链接
     */
    public function post(): ApiOpenApi2ClueCaUpdatePostRequest
    {
        return new ApiOpenApi2ClueCaUpdatePostRequest($this);
    }
}
