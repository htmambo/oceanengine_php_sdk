<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_status_batch_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpProductStatusBatchUpdateV30ApiService
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
     * EBP批量修改DPA商品状态
     */
    public function post(): ApiOpenApiV30DpaEbpProductStatusBatchUpdatePostRequest
    {
        return new ApiOpenApiV30DpaEbpProductStatusBatchUpdatePostRequest($this);
    }
}
