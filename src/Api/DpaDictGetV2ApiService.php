<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_dict_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaDictGetV2ApiService
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
     * 获取DPA词包
     */
    public function get(): ApiOpenApi2DpaDictGetGetRequest
    {
        return new ApiOpenApi2DpaDictGetGetRequest($this);
    }
}
