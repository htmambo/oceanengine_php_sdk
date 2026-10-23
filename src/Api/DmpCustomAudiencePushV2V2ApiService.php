<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_push_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpCustomAudiencePushV2V2ApiService
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
    public function post(): ApiOpenApi2DmpCustomAudiencePushV2PostRequest
    {
        return new ApiOpenApi2DmpCustomAudiencePushV2PostRequest($this);
    }
}
