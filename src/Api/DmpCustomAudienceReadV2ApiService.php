<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_read_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpCustomAudienceReadV2ApiService
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
     * 用户可以通过调用此接口，查询广告主下的指定人群包信息。支持查询已删除的人群包信息，具体包含的信息内容请查看应答参数。
     */
    public function get(): ApiOpenApi2DmpCustomAudienceReadGetRequest
    {
        return new ApiOpenApi2DmpCustomAudienceReadGetRequest($this);
    }
}
