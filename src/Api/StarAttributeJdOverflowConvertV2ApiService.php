<?php

/**
 * 本文件由 go2php 生成，源: api_star_attribute_jd_overflow_convert_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarAttributeJdOverflowConvertV2ApiService
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
     * 外溢度量-京东回传转化数据
     */
    public function post(): ApiOpenApi2StarAttributeJdOverflowConvertPostRequest
    {
        return new ApiOpenApi2StarAttributeJdOverflowConvertPostRequest($this);
    }
}
