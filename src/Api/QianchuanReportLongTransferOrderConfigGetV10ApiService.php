<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_long_transfer_order_config_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportLongTransferOrderConfigGetV10ApiService
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
     * 查询用户可以用于长周期订单明细的指标和维度
     */
    public function get(): ApiOpenApiV10QianchuanReportLongTransferOrderConfigGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportLongTransferOrderConfigGetGetRequest($this);
    }
}
