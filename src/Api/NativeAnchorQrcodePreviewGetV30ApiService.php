<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_qrcode_preview_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class NativeAnchorQrcodePreviewGetV30ApiService
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
     * 获取锚点的预览链接
     */
    public function get(): ApiOpenApiV30NativeAnchorQrcodePreviewGetGetRequest
    {
        return new ApiOpenApiV30NativeAnchorQrcodePreviewGetGetRequest($this);
    }
}
