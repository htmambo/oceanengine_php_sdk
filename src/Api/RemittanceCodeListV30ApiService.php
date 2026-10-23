<?php

/**
 * 本文件由 go2php 生成，源: api_remittance_code_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class RemittanceCodeListV30ApiService
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
     * 根据账号ID或者汇款码查询汇款码信息
     */
    public function get(): ApiOpenApiV30RemittanceCodeListGetRequest
    {
        return new ApiOpenApiV30RemittanceCodeListGetRequest($this);
    }
}
