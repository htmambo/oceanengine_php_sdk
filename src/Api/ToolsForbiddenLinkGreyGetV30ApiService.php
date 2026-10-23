<?php

/**
 * 本文件由 go2php 生成，源: api_tools_forbidden_link_grey_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsForbiddenLinkGreyGetV30ApiService
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
     * 本地交易强切白名单查询
     */
    public function get(): ApiOpenApiV30ToolsForbiddenLinkGreyGetGetRequest
    {
        return new ApiOpenApiV30ToolsForbiddenLinkGreyGetGetRequest($this);
    }
}
