<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_suggest_budget_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 推直播间-日常销售-通投-托管-放量投放场景获取建议预算
 */
class ApiOpenApiV10QianchuanSuggestBudgetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    private ?string $liveScheduleType = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?string $scheduleTime = null;
    private ?int $scheduleFixedRange = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanSuggestBudgetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function liveScheduleType(string $liveScheduleType): self
    {
        $this->liveScheduleType = $liveScheduleType;
        return $this;
    }

    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function scheduleTime(string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    public function scheduleFixedRange(int $scheduleFixedRange): self
    {
        $this->scheduleFixedRange = $scheduleFixedRange;
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
     * 推直播间-日常销售-通投-托管-放量投放场景获取建议预算
     */
    public function execute(): \Oceanengine\Models\QianchuanSuggestBudgetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->liveScheduleType === null) {
            throw new \InvalidArgumentException('liveScheduleType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['live_schedule_type'] = $this->liveScheduleType;
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->scheduleTime !== null) {
            $queryParams['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleFixedRange !== null) {
            $queryParams['schedule_fixed_range'] = $this->scheduleFixedRange;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/suggest/budget/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanSuggestBudgetV10Response::class);

        return $result['model'];
    }
}
