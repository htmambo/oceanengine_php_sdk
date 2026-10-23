<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_estimate_profit_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeEstimateProfitV10ApiService
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
     * 小店获取投放效果预估
     */
    public function get(): ApiOpenApiV10QianchuanAwemeEstimateProfitGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeEstimateProfitGetRequest($this);
    }
}
