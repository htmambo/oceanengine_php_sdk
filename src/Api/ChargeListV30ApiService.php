<?php

/**
 * 本文件由 go2php 生成，源: api_charge_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ChargeListV30ApiService
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
     * 根据广告主账号和相应的业务线去查询对应的充值记录
     */
    public function get(): ApiOpenApiV30ChargeListGetRequest
    {
        return new ApiOpenApiV30ChargeListGetRequest($this);
    }
}
