<?php

/**
 * 本文件由 go2php 生成，源: api_aic_mixcut_task_save_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicMixcutTaskSaveV30ApiService
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
     * 保存任务生成的视频到即创的视频库（即组织或者是代理账号下面的视频库）。可以使用同组织账号登录即创，进到即创素材库，进行成片审核。
     */
    public function post(): ApiOpenApiV30AicMixcutTaskSavePostRequest
    {
        return new ApiOpenApiV30AicMixcutTaskSavePostRequest($this);
    }
}
