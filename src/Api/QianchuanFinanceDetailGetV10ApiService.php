<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_finance_detail_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanFinanceDetailGetV10ApiService
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
     * API Description2
     */
    public function get(): ApiOpenApiV10QianchuanFinanceDetailGetGetRequest
    {
        return new ApiOpenApiV10QianchuanFinanceDetailGetGetRequest($this);
    }
}
