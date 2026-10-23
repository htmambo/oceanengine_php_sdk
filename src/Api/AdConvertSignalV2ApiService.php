<?php

/**
 * 本文件由 go2php 生成，源: api_ad_convert_signal_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdConvertSignalV2ApiService
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
     * 全域增效API，对客介绍文档：https://bytedance.larkoffice.com/docx/QMhsdxN8Tou1c1xvvbUc1V01nGb
     */
    public function post(): ApiOpenApi2AdConvertSignalPostRequest
    {
        return new ApiOpenApi2AdConvertSignalPostRequest($this);
    }
}
