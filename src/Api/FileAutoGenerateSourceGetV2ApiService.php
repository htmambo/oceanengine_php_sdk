<?php

/**
 * 本文件由 go2php 生成，源: api_file_auto_generate_source_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileAutoGenerateSourceGetV2ApiService
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
     * 获取派生素材的原始素材
     */
    public function get(): ApiOpenApi2FileAutoGenerateSourceGetGetRequest
    {
        return new ApiOpenApi2FileAutoGenerateSourceGetGetRequest($this);
    }
}
