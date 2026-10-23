<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_dmp_audiences_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanDmpAudiencesGetV10ApiService
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
     * 本接口，仅用来获取在PC端创建/更新广告计划，定向设置下选择“更多人群”时，所展示的人群包列表信息。
     */
    public function get(): ApiOpenApiV10QianchuanDmpAudiencesGetGetRequest
    {
        return new ApiOpenApiV10QianchuanDmpAudiencesGetGetRequest($this);
    }
}
