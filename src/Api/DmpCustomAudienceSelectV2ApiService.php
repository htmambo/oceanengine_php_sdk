<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpCustomAudienceSelectV2ApiService
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
     * 通过此接口你可以查询广告主下存在的人群包列表和信息。
     */
    public function get(): ApiOpenApi2DmpCustomAudienceSelectGetRequest
    {
        return new ApiOpenApi2DmpCustomAudienceSelectGetRequest($this);
    }
}
