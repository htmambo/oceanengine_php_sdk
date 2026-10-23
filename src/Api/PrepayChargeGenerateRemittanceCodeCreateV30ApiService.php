<?php

/**
 * 本文件由 go2php 生成，源: api_prepay_charge_generate_remittance_code_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PrepayChargeGenerateRemittanceCodeCreateV30ApiService
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
     * SVIP客户提交对公充值获取汇款码
     */
    public function post(): ApiOpenApiV30PrepayChargeGenerateRemittanceCodeCreatePostRequest
    {
        return new ApiOpenApiV30PrepayChargeGenerateRemittanceCodeCreatePostRequest($this);
    }
}
