<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_auto_setting_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalImAutoSettingGetV30ApiService
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
     * 查询线索私信功能开关
     */
    public function get(): ApiOpenApiV30LocalImAutoSettingGetGetRequest
    {
        return new ApiOpenApiV30LocalImAutoSettingGetGetRequest($this);
    }
}
