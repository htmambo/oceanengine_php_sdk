<?php

/**
 * 本文件由 go2php 生成，源: api_aic_mixcut_task_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicMixcutTaskResultGetV30ApiService
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
     * 通过task_id查询任务生成结果
     */
    public function get(): ApiOpenApiV30AicMixcutTaskResultGetGetRequest
    {
        return new ApiOpenApiV30AicMixcutTaskResultGetGetRequest($this);
    }
}
