<?php

/**
 * 本文件由 go2php 生成，源: api_security_get_consult_result_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityGetConsultResultV30ApiService
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
     * 查询已申诉对象的申诉结果
     */
    public function get(): ApiOpenApiV30SecurityGetConsultResultGetRequest
    {
        return new ApiOpenApiV30SecurityGetConsultResultGetRequest($this);
    }
}
