<?php

/**
 * 本文件由 go2php 生成，源: api_clue_smartphone_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueSmartphoneDeleteV2ApiService
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
     * API Description
     */
    public function post(): ApiOpenApi2ClueSmartphoneDeletePostRequest
    {
        return new ApiOpenApi2ClueSmartphoneDeletePostRequest($this);
    }
}
