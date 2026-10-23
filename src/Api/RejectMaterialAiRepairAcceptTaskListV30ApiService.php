<?php

/**
 * 本文件由 go2php 生成，源: api_reject_material_ai_repair_accept_task_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class RejectMaterialAiRepairAcceptTaskListV30ApiService
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
     * 获取采纳素材修复建议任务结果
     */
    public function get(): ApiOpenApiV30RejectMaterialAiRepairAcceptTaskListGetRequest
    {
        return new ApiOpenApiV30RejectMaterialAiRepairAcceptTaskListGetRequest($this);
    }
}
