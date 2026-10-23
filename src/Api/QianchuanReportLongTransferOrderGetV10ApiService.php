<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_long_transfer_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportLongTransferOrderGetV10ApiService
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
     * 长周期转化价值-订单明细
     */
    public function get(): ApiOpenApiV10QianchuanReportLongTransferOrderGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportLongTransferOrderGetGetRequest($this);
    }
}
