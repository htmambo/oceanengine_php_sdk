<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_copy_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteCopyV2ApiService
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
     * 通过此接口，用户可以实现站点的复制功能，成功后生成一个新站点id，站点内容和原站点一致。 注意
     * 用户在传入请求参数site_ids站点id列表时，需确保id的正确性，存在错误将导致复制全部失败！
     */
    public function post(): ApiOpenApi2ToolsSiteCopyPostRequest
    {
        return new ApiOpenApi2ToolsSiteCopyPostRequest($this);
    }
}
