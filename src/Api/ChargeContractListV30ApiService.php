<?php

/**
 * 本文件由 go2php 生成，源: api_charge_contract_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ChargeContractListV30ApiService
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
     * 充值可用合同查询
     */
    public function get(): ApiOpenApiV30ChargeContractListGetRequest
    {
        return new ApiOpenApiV30ChargeContractListGetRequest($this);
    }
}
