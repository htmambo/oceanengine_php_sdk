<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_long_transfer_order_data_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportLongTransferOrderDataGetV10ApiService
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
     * 获取长周期订单
     */
    public function get(): ApiOpenApiV10QianchuanReportLongTransferOrderDataGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportLongTransferOrderDataGetGetRequest($this);
    }
}
