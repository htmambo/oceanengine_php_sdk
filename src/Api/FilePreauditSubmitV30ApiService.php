<?php

/**
 * 本文件由 go2php 生成，源: api_file_preaudit_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FilePreauditSubmitV30ApiService
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
     * 素材预审提交
     */
    public function post(): ApiOpenApiV30FilePreauditSubmitPostRequest
    {
        return new ApiOpenApiV30FilePreauditSubmitPostRequest($this);
    }
}
