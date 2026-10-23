<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDeliveryPkgSubmitV30ApiService
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
     * 用于提交以推广产品形式整组提交的投放资质，该接口可以同时用于新增和编辑。
     * 针对审核不通过的推广产品资质支持编辑提交
     */
    public function post(): ApiOpenApiV30AdvertiserDeliveryPkgSubmitPostRequest
    {
        return new ApiOpenApiV30AdvertiserDeliveryPkgSubmitPostRequest($this);
    }
}
