<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_efficiency_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoEfficiencyGetV2ApiService
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
     * 当前仅支持查询视频类型的素材。
     * 低效素材：根据素材与相似素材投放数据，系统预估该素材后续难以起量，建议暂停或更换素材
     */
    public function get(): ApiOpenApi2FileVideoEfficiencyGetGetRequest
    {
        return new ApiOpenApi2FileVideoEfficiencyGetGetRequest($this);
    }
}
