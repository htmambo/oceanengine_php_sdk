<?php

/**
 * 本文件由 go2php 生成，源: api_query_booking_business_entity_id_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryBookingBusinessEntityIdGetV2ApiService
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
     * 排期-查询业务实体ID
     */
    public function get(): ApiOpenApi2QueryBookingBusinessEntityIdGetGetRequest
    {
        return new ApiOpenApi2QueryBookingBusinessEntityIdGetGetRequest($this);
    }
}
