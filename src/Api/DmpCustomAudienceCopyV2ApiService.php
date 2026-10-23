<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_copy_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpCustomAudienceCopyV2ApiService
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
     * 通过此接口，将DMP人群包复制一个，并推送至对应的云图账号内，可在人群模块自定义分析查看和应用（该人群不支持再次推送）
     */
    public function post(): ApiOpenApi2DmpCustomAudienceCopyPostRequest
    {
        return new ApiOpenApi2DmpCustomAudienceCopyPostRequest($this);
    }
}
