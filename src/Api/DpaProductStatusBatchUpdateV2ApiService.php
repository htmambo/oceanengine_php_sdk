<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_product_status_batch_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaProductStatusBatchUpdateV2ApiService
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
     * 此接口用于批量修改DPA商品状态
     */
    public function post(): ApiOpenApi2DpaProductStatusBatchUpdatePostRequest
    {
        return new ApiOpenApi2DpaProductStatusBatchUpdatePostRequest($this);
    }
}
