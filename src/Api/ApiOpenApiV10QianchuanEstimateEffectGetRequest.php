<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_estimate_effect_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 推直播间-日常销售-通投-托管-放量投放场景获取预估效果
 */
class ApiOpenApiV10QianchuanEstimateEffectGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    private ?string $externalAction = null;
    private ?string $budgetMode = null;
    private ?float $budget = null;
    private ?string $liveScheduleType = null;
    private ?string $deepExternalAction = null;
    private ?string $deepBidType = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?string $scheduleTime = null;
    private ?int $scheduleFixedRange = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanEstimateEffectV10ApiService $service)
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

    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    public function budgetMode(string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    public function budget(float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    public function liveScheduleType(string $liveScheduleType): self
    {
        $this->liveScheduleType = $liveScheduleType;
        return $this;
    }

    public function deepExternalAction(string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    public function deepBidType(string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
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
     * 推直播间-日常销售-通投-托管-放量投放场景获取预估效果
     */
    public function execute(): \Oceanengine\Models\QianchuanEstimateEffectV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->externalAction === null) {
            throw new \InvalidArgumentException('externalAction is required and must be specified');
        }
        if ($this->budgetMode === null) {
            throw new \InvalidArgumentException('budgetMode is required and must be specified');
        }
        if ($this->budget === null) {
            throw new \InvalidArgumentException('budget is required and must be specified');
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
        $queryParams['external_action'] = $this->externalAction;
        if ($this->deepExternalAction !== null) {
            $queryParams['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deepBidType !== null) {
            $queryParams['deep_bid_type'] = $this->deepBidType;
        }
        $queryParams['budget_mode'] = $this->budgetMode;
        $queryParams['budget'] = $this->budget;
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
        $url = '/open_api/v1.0/qianchuan/estimate/effect/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanEstimateEffectV10Response::class);

        return $result['model'];
    }
}
