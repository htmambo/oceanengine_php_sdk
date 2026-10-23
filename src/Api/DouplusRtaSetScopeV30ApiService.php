<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_rta_set_scope_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusRtaSetScopeV30ApiService
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
     * 设置RTA生效范围，（注：订单维度绑定的RTA_id，不支持换绑。账户维度支持换绑，但建议账户没有在投计划时再换绑）
     */
    public function post(): ApiOpenApiV30DouplusRtaSetScopePostRequest
    {
        return new ApiOpenApiV30DouplusRtaSetScopePostRequest($this);
    }
}
