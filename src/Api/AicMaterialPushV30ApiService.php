<?php

/**
 * 本文件由 go2php 生成，源: api_aic_material_push_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicMaterialPushV30ApiService
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
     * 推送素材到广告主账号下，素材限制:任务生成的视频或者保存到即创视频库的素材
     */
    public function post(): ApiOpenApiV30AicMaterialPushPostRequest
    {
        return new ApiOpenApiV30AicMaterialPushPostRequest($this);
    }
}
