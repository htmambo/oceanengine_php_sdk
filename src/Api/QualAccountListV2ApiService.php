<?php

/**
 * 本文件由 go2php 生成，源: api_qual_account_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QualAccountListV2ApiService
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
     * 资质编号查询账户列表
     */
    public function get(): ApiOpenApi2QualAccountListGetRequest
    {
        return new ApiOpenApi2QualAccountListGetRequest($this);
    }
}
