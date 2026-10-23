<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_data_product_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileRebateDataProductCreateV2ApiService
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
     * OpenAPI离线数据就绪消息，订阅及取消订阅
     */
    public function post(): ApiOpenApi2FileRebateDataProductCreatePostRequest
    {
        return new ApiOpenApi2FileRebateDataProductCreatePostRequest($this);
    }
}
