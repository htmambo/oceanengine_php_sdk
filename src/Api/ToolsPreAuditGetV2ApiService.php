<?php

/**
 * 本文件由 go2php 生成，源: api_tools_pre_audit_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPreAuditGetV2ApiService
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
     * 通过此接口，用户可以获取到前置预审审核的结果。
     * > 需要注意的是前置预审的结果和最终的素材的审核结果可能存在出入，前置预审结果仅供参考。
     */
    public function get(): ApiOpenApi2ToolsPreAuditGetGetRequest
    {
        return new ApiOpenApi2ToolsPreAuditGetGetRequest($this);
    }
}
