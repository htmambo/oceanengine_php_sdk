<?php

/**
 * 本文件由 go2php 生成，源: api_star_fe_common_service_talent_day_get_check_in_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 达人节-获取签到码
 */
class ApiOpenApi2StarFeCommonServiceTalentDayGetCheckInCodeGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 抖音UID */
    private ?int $sCoreUserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarFeCommonServiceTalentDayGetCheckInCodeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 抖音UID
     */
    public function sCoreUserId(int $sCoreUserId): self
    {
        $this->sCoreUserId = $sCoreUserId;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 达人节-获取签到码
     */
    public function execute(): \Oceanengine\Models\StarFeCommonServiceTalentDayGetCheckInCodeV2Response
    {
        if ($this->sCoreUserId === null) {
            throw new \InvalidArgumentException('sCoreUserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['s_core_user_id'] = $this->sCoreUserId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/fe_common_service/talent_day/get_check_in_code/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarFeCommonServiceTalentDayGetCheckInCodeV2Response::class);

        return $result['model'];
    }
}
