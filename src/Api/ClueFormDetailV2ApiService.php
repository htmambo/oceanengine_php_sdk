<?php

/**
 * 本文件由 go2php 生成，源: api_clue_form_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueFormDetailV2ApiService
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
    public function get(): ApiOpenApi2ClueFormDetailGetRequest
    {
        return new ApiOpenApi2ClueFormDetailGetRequest($this);
    }
}
