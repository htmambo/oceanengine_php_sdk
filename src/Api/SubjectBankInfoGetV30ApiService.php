<?php

/**
 * 本文件由 go2php 生成，源: api_subject_bank_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SubjectBankInfoGetV30ApiService
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
     * 查询主体对应的银行信息
     */
    public function get(): ApiOpenApiV30SubjectBankInfoGetGetRequest
    {
        return new ApiOpenApiV30SubjectBankInfoGetGetRequest($this);
    }
}
