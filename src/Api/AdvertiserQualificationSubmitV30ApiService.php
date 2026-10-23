<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_qualification_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserQualificationSubmitV30ApiService
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
     * 提交广告主资质信息为全量接口。更新的时候需要全量先获取所有资质，然后更新相应资质。
     */
    public function post(): ApiOpenApiV30AdvertiserQualificationSubmitPostRequest
    {
        return new ApiOpenApiV30AdvertiserQualificationSubmitPostRequest($this);
    }
}
