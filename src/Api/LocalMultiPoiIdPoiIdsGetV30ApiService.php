<?php

/**
 * 本文件由 go2php 生成，源: api_local_multi_poi_id_poi_ids_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalMultiPoiIdPoiIdsGetV30ApiService
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
     * 根据多门店ID拉取门店ID
     */
    public function get(): ApiOpenApiV30LocalMultiPoiIdPoiIdsGetGetRequest
    {
        return new ApiOpenApiV30LocalMultiPoiIdPoiIdsGetGetRequest($this);
    }
}
