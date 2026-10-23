<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_query_cps_task_sales_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemanderQueryCpsTaskSalesV2ApiService
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
     * 客户通过星图ID+任务ID查询cps流水
     */
    public function get(): ApiOpenApi2StarDemanderQueryCpsTaskSalesGetRequest
    {
        return new ApiOpenApi2StarDemanderQueryCpsTaskSalesGetRequest($this);
    }
}
