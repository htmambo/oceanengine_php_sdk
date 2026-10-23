<?php

/**
 * 本文件由 go2php 生成，源: api_charge_info_payment_voucher_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ChargeInfoPaymentVoucherGetV30ApiService
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
     * 根据打款凭证查询充值信息
     */
    public function get(): ApiOpenApiV30ChargeInfoPaymentVoucherGetGetRequest
    {
        return new ApiOpenApiV30ChargeInfoPaymentVoucherGetGetRequest($this);
    }
}
