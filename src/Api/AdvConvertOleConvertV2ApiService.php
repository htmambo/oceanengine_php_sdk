<?php

/**
 * 本文件由 go2php 生成，源: api_adv_convert_ole_convert_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvConvertOleConvertV2ApiService
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
     * 引流下单转化信息获取
     */
    public function post(): ApiOpenApi2AdvConvertOleConvertPostRequest
    {
        return new ApiOpenApi2AdvConvertOleConvertPostRequest($this);
    }
}
