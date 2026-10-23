<?php

/**
 * 本文件由 go2php 生成，源: api_prepay_charge_generate_fix_remiattance_code_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PrepayChargeGenerateFixRemiattanceCodeCreateV30ApiService
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
     * 广告主对公充值生成固定码
     */
    public function post(): ApiOpenApiV30PrepayChargeGenerateFixRemiattanceCodeCreatePostRequest
    {
        return new ApiOpenApiV30PrepayChargeGenerateFixRemiattanceCodeCreatePostRequest($this);
    }
}
