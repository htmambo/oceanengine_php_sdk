<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_publish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpCustomAudiencePublishV2ApiService
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
    public function post(): ApiOpenApi2DmpCustomAudiencePublishPostRequest
    {
        return new ApiOpenApi2DmpCustomAudiencePublishPostRequest($this);
    }
}
