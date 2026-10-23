<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_upload_cps_task_sales_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemanderUploadCpsTaskSalesV2ApiService
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
     * 客户回传cps流水
     */
    public function post(): ApiOpenApi2StarDemanderUploadCpsTaskSalesPostRequest
    {
        return new ApiOpenApi2StarDemanderUploadCpsTaskSalesPostRequest($this);
    }
}
