<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_video_efficiency_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanFileVideoEfficiencyGetV10ApiService
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
     * 支持查询素材是否是低效素材，传入素材ID列表，返回低效素材列表。
     */
    public function get(): ApiOpenApiV10QianchuanFileVideoEfficiencyGetGetRequest
    {
        return new ApiOpenApiV10QianchuanFileVideoEfficiencyGetGetRequest($this);
    }
}
