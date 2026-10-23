<?php

/**
 * 本文件由 go2php 生成，源: api_star_fe_common_service_talent_day_judge_checked_in_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 达人节签到查询用户信息
 */
class ApiOpenApi2StarFeCommonServiceTalentDayJudgeCheckedInGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 二维码扫出来的内容 */
    private ?string $code = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarFeCommonServiceTalentDayJudgeCheckedInV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 二维码扫出来的内容
     */
    public function code(string $code): self
    {
        $this->code = $code;
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
     * 达人节签到查询用户信息
     */
    public function execute(): \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2Response
    {
        if ($this->code === null) {
            throw new \InvalidArgumentException('code is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['code'] = $this->code;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/fe_common_service/talent_day/judge_checked_in/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarFeCommonServiceTalentDayJudgeCheckedInV2Response::class);

        return $result['model'];
    }
}
