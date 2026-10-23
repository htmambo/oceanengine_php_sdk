<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_qualification_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserQualificationGetV30ApiService
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
     * 获取广告主资质信息为全量接口，会返回广告主所有资质，注意如果广告主没有任何资质，这个接口的data将会是空。
     */
    public function get(): ApiOpenApiV30AdvertiserQualificationGetGetRequest
    {
        return new ApiOpenApiV30AdvertiserQualificationGetGetRequest($this);
    }
}
