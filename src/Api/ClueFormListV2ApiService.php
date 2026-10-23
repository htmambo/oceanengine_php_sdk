<?php

/**
 * 本文件由 go2php 生成，源: api_clue_form_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueFormListV2ApiService
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
    public function get(): ApiOpenApi2ClueFormListGetRequest
    {
        return new ApiOpenApi2ClueFormListGetRequest($this);
    }
}
