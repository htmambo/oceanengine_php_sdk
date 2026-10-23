<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_video_original_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanFileVideoOriginalGetV10ApiService
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
     * 支持查询素材是否是首发素材，传入素材ID列表，返回首发素材列表。
     */
    public function get(): ApiOpenApiV10QianchuanFileVideoOriginalGetGetRequest
    {
        return new ApiOpenApiV10QianchuanFileVideoOriginalGetGetRequest($this);
    }
}
