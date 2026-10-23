<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ad_preview_qrcode_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAdPreviewQrcodeGetV30ApiService
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
     * 获取广告预览二维码、素材预览二维码
     */
    public function get(): ApiOpenApiV30ToolsAdPreviewQrcodeGetGetRequest
    {
        return new ApiOpenApiV30ToolsAdPreviewQrcodeGetGetRequest($this);
    }
}
