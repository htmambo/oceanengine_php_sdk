<?php

/**
 * 本文件由 go2php 生成，源: api_star_fe_common_service_talent_day_get_check_in_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarFeCommonServiceTalentDayGetCheckInCodeV2ApiService
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
     * 达人节-获取签到码
     */
    public function get(): ApiOpenApi2StarFeCommonServiceTalentDayGetCheckInCodeGetRequest
    {
        return new ApiOpenApi2StarFeCommonServiceTalentDayGetCheckInCodeGetRequest($this);
    }
}
