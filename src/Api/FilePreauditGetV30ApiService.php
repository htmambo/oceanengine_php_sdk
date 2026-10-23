<?php

/**
 * 本文件由 go2php 生成，源: api_file_preaudit_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FilePreauditGetV30ApiService
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
     * 素材预审结果查询
     */
    public function get(): ApiOpenApiV30FilePreauditGetGetRequest
    {
        return new ApiOpenApiV30FilePreauditGetGetRequest($this);
    }
}
