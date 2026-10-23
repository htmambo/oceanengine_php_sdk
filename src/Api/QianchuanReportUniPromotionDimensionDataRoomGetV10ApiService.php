<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_uni_promotion_dimension_data_room_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportUniPromotionDimensionDataRoomGetV10ApiService
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
     * /qianchuan/report/uni_promotion/dimension_data/room/get/
     */
    public function get(): ApiOpenApiV10QianchuanReportUniPromotionDimensionDataRoomGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportUniPromotionDimensionDataRoomGetGetRequest($this);
    }
}
