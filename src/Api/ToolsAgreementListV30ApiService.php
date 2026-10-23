<?php

/**
 * 本文件由 go2php 生成，源: api_tools_agreement_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAgreementListV30ApiService
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
     * 查询当前投放账号下的协议列表，包括待签署协议、需重新签署协议、已签署协议
     */
    public function get(): ApiOpenApiV30ToolsAgreementListGetRequest
    {
        return new ApiOpenApiV30ToolsAgreementListGetRequest($this);
    }
}
