<?php

/**
 * 本文件由 go2php 生成，源: api_star_fe_common_service_talent_day_judge_checked_in_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarFeCommonServiceTalentDayJudgeCheckedInV2ApiService
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
     * 达人节签到查询用户信息
     */
    public function get(): ApiOpenApi2StarFeCommonServiceTalentDayJudgeCheckedInGetRequest
    {
        return new ApiOpenApi2StarFeCommonServiceTalentDayJudgeCheckedInGetRequest($this);
    }
}
