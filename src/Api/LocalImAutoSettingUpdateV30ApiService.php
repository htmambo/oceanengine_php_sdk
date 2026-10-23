<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_auto_setting_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImAutoSettingUpdateV30ApiService
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
     * 更新线索私信功能开关
     */
    public function post(): ApiOpenApiV30LocalImAutoSettingUpdatePostRequest
    {
        return new ApiOpenApiV30LocalImAutoSettingUpdatePostRequest($this);
    }
}
