<?php

/**
 * 本文件由 go2php 生成，源: api_local_delivery_qualification_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalDeliveryQualificationListV30ApiService
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
     * 获取投放资质
     */
    public function get(): ApiOpenApiV30LocalDeliveryQualificationListGetRequest
    {
        return new ApiOpenApiV30LocalDeliveryQualificationListGetRequest($this);
    }
}
