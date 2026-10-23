<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_refund_view_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueRefundViewGetV2ApiService
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
     * 飞鱼提供前端SDK帮助开发者接入返款视图，开发者可通过该接口获取对应线索id的返款视图相关内容，并将全量数据传入飞鱼提供的SDK做渲染
     */
    public function get(): ApiOpenApi2ToolsClueRefundViewGetGetRequest
    {
        return new ApiOpenApi2ToolsClueRefundViewGetGetRequest($this);
    }
}
