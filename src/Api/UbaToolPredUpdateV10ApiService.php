<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_pred_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UbaToolPredUpdateV10ApiService
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
     * agent用于模型预估纠偏
     */
    public function post(): ApiOpenApiV10UbaToolPredUpdatePostRequest
    {
        return new ApiOpenApiV10UbaToolPredUpdatePostRequest($this);
    }
}
