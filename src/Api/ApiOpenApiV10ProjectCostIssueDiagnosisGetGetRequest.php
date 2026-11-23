<?php

/**
 * 本文件由 go2php 生成，源: api_project_cost_issue_diagnosis_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * DiagnoseCostIssue：按计费时间比较今日累计付费ROI与昨天同时段，返回低ROI消耗RIT、消耗TOP计划/素材中的零转化对象和证据。阈值、对比天数、保护RIT、TOP数量和持续时间显式传入；仅返回建议，不屏蔽RIT、不关停计划、不删除素材。
 */
class ApiOpenApiV10ProjectCostIssueDiagnosisGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $cdpProjectId = null;
    private ?float $roiDropRatio = null;
    /** @var int explicit day offset; use 1 for yesterday (confirmed by user) */
    private ?int $comparisonDays = null;
    /** @var float e.g. 0.002; strict less-than */
    private ?float $ritRoiThreshold = null;
    /** @var int[] e.g. [40001] */
    private ?array $protectedRitIds = null;
    /** @var int e.g. 10; top N first, then filter zero conversions */
    private ?int $topPlanCount = null;
    /** @var int e.g. 20 */
    private ?int $topMaterialCount = null;
    private ?int $durationSeconds = null;
    private ?string $asOf = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectCostIssueDiagnosisGetV10ApiService $service)
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

    public function roiDropRatio(float $roiDropRatio): self
    {
        $this->roiDropRatio = $roiDropRatio;
        return $this;
    }

    /**
     * explicit day offset; use 1 for yesterday (confirmed by user)
     */
    public function comparisonDays(int $comparisonDays): self
    {
        $this->comparisonDays = $comparisonDays;
        return $this;
    }

    /**
     * e.g. 0.002; strict less-than
     */
    public function ritRoiThreshold(float $ritRoiThreshold): self
    {
        $this->ritRoiThreshold = $ritRoiThreshold;
        return $this;
    }

    /**
     * e.g. [40001]
     */
    public function protectedRitIds(array $protectedRitIds): self
    {
        $this->protectedRitIds = $protectedRitIds;
        return $this;
    }

    /**
     * e.g. 10; top N first, then filter zero conversions
     */
    public function topPlanCount(int $topPlanCount): self
    {
        $this->topPlanCount = $topPlanCount;
        return $this;
    }

    /**
     * e.g. 20
     */
    public function topMaterialCount(int $topMaterialCount): self
    {
        $this->topMaterialCount = $topMaterialCount;
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
     * DiagnoseCostIssue：按计费时间比较今日累计付费ROI与昨天同时段，返回低ROI消耗RIT、消耗TOP计划/素材中的零转化对象和证据。阈值、对比天数、保护RIT、TOP数量和持续时间显式传入；仅返回建议，不屏蔽RIT、不关停计划、不删除素材。
     */
    public function execute(): \Oceanengine\Models\ProjectCostIssueDiagnosisGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->cdpProjectId === null) {
            throw new \InvalidArgumentException('cdpProjectId is required and must be specified');
        }
        if ($this->roiDropRatio === null) {
            throw new \InvalidArgumentException('roiDropRatio is required and must be specified');
        }
        if ($this->comparisonDays === null) {
            throw new \InvalidArgumentException('comparisonDays is required and must be specified');
        }
        if ($this->ritRoiThreshold === null) {
            throw new \InvalidArgumentException('ritRoiThreshold is required and must be specified');
        }
        if ($this->protectedRitIds === null) {
            throw new \InvalidArgumentException('protectedRitIds is required and must be specified');
        }
        if ($this->topPlanCount === null) {
            throw new \InvalidArgumentException('topPlanCount is required and must be specified');
        }
        if ($this->topMaterialCount === null) {
            throw new \InvalidArgumentException('topMaterialCount is required and must be specified');
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
        $queryParams['roi_drop_ratio'] = $this->roiDropRatio;
        $queryParams['comparison_days'] = $this->comparisonDays;
        $queryParams['rit_roi_threshold'] = $this->ritRoiThreshold;
        $queryParams['protected_rit_ids'] = $this->protectedRitIds;
        $queryParams['top_plan_count'] = $this->topPlanCount;
        $queryParams['top_material_count'] = $this->topMaterialCount;
        $queryParams['duration_seconds'] = $this->durationSeconds;
        if ($this->asOf !== null) {
            $queryParams['as_of'] = $this->asOf;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/project_cost_issue_diagnosis/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectCostIssueDiagnosisGetV10Response::class);

        return $result['model'];
    }
}
