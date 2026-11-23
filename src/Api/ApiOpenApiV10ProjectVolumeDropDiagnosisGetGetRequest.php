<?php

/**
 * 本文件由 go2php 生成，源: api_project_volume_drop_diagnosis_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * DiagnoseVolumeDrop：按今日累计消耗与昨天同时段对比，并查询项目消耗TOP计划及最近两个完整小时精排通过率；阈值、纠偏步长/上限、TOP数量和持续时间均由调用方传入。仅返回诊断证据和纠偏建议，不执行纠偏、创编、关停或删除。外部调用方决定调用时机。
 */
class ApiOpenApiV10ProjectVolumeDropDiagnosisGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $cdpProjectId = null;
    private ?float $spendDropRatio = null;
    private ?float $rankingDropRatio = null;
    /** @var float absolute coefficient increment, e.g. 0.05 */
    private ?float $pvrCoefStep = null;
    /** @var float absolute coefficient cap, e.g. 1.20 */
    private ?float $pvrCoefCap = null;
    /** @var int e.g. 5; plan means underlying ad_id */
    private ?int $topPlanCount = null;
    private ?int $durationSeconds = null;
    private ?string $asOf = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectVolumeDropDiagnosisGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function cdpProjectId(int $cdpProjectId): self
    {
        $this->cdpProjectId = $cdpProjectId;
        return $this;
    }

    public function spendDropRatio(float $spendDropRatio): self
    {
        $this->spendDropRatio = $spendDropRatio;
        return $this;
    }

    public function rankingDropRatio(float $rankingDropRatio): self
    {
        $this->rankingDropRatio = $rankingDropRatio;
        return $this;
    }

    /**
     * absolute coefficient increment, e.g. 0.05
     */
    public function pvrCoefStep(float $pvrCoefStep): self
    {
        $this->pvrCoefStep = $pvrCoefStep;
        return $this;
    }

    /**
     * absolute coefficient cap, e.g. 1.20
     */
    public function pvrCoefCap(float $pvrCoefCap): self
    {
        $this->pvrCoefCap = $pvrCoefCap;
        return $this;
    }

    /**
     * e.g. 5; plan means underlying ad_id
     */
    public function topPlanCount(int $topPlanCount): self
    {
        $this->topPlanCount = $topPlanCount;
        return $this;
    }

    public function durationSeconds(int $durationSeconds): self
    {
        $this->durationSeconds = $durationSeconds;
        return $this;
    }

    public function asOf(string $asOf): self
    {
        $this->asOf = $asOf;
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
     * DiagnoseVolumeDrop：按今日累计消耗与昨天同时段对比，并查询项目消耗TOP计划及最近两个完整小时精排通过率；阈值、纠偏步长/上限、TOP数量和持续时间均由调用方传入。仅返回诊断证据和纠偏建议，不执行纠偏、创编、关停或删除。外部调用方决定调用时机。
     */
    public function execute(): \Oceanengine\Models\ProjectVolumeDropDiagnosisGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->cdpProjectId === null) {
            throw new \InvalidArgumentException('cdpProjectId is required and must be specified');
        }
        if ($this->spendDropRatio === null) {
            throw new \InvalidArgumentException('spendDropRatio is required and must be specified');
        }
        if ($this->rankingDropRatio === null) {
            throw new \InvalidArgumentException('rankingDropRatio is required and must be specified');
        }
        if ($this->pvrCoefStep === null) {
            throw new \InvalidArgumentException('pvrCoefStep is required and must be specified');
        }
        if ($this->pvrCoefCap === null) {
            throw new \InvalidArgumentException('pvrCoefCap is required and must be specified');
        }
        if ($this->topPlanCount === null) {
            throw new \InvalidArgumentException('topPlanCount is required and must be specified');
        }
        if ($this->durationSeconds === null) {
            throw new \InvalidArgumentException('durationSeconds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['cdp_project_id'] = $this->cdpProjectId;
        $queryParams['spend_drop_ratio'] = $this->spendDropRatio;
        $queryParams['ranking_drop_ratio'] = $this->rankingDropRatio;
        $queryParams['pvr_coef_step'] = $this->pvrCoefStep;
        $queryParams['pvr_coef_cap'] = $this->pvrCoefCap;
        $queryParams['top_plan_count'] = $this->topPlanCount;
        $queryParams['duration_seconds'] = $this->durationSeconds;
        if ($this->asOf !== null) {
            $queryParams['as_of'] = $this->asOf;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/project_volume_drop_diagnosis/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectVolumeDropDiagnosisGetV10Response::class);

        return $result['model'];
    }
}
