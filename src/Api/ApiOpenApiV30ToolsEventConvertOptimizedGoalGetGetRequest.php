<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_convert_optimized_goal_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持建站和小程序资产获取优化目标
 */
class ApiOpenApiV30ToolsEventConvertOptimizedGoalGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $landingType = null;
    private ?string $marketingPurpose = null;
    private ?string $assetType = null;
    private ?int $advertiserId = null;
    private ?int $siteId = null;
    private ?string $miniProgramId = null;
    private ?int $assetId = null;
    private ?string $campaignType = null;
    private ?int $microAppInstanceId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEventConvertOptimizedGoalGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function landingType(string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    public function marketingPurpose(string $marketingPurpose): self
    {
        $this->marketingPurpose = $marketingPurpose;
        return $this;
    }

    public function assetType(string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function siteId(int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function miniProgramId(string $miniProgramId): self
    {
        $this->miniProgramId = $miniProgramId;
        return $this;
    }

    public function assetId(int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    public function campaignType(string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    public function microAppInstanceId(int $microAppInstanceId): self
    {
        $this->microAppInstanceId = $microAppInstanceId;
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
     * 支持建站和小程序资产获取优化目标
     */
    public function execute(): \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30Response
    {
        if ($this->landingType === null) {
            throw new \InvalidArgumentException('landingType is required and must be specified');
        }
        if ($this->marketingPurpose === null) {
            throw new \InvalidArgumentException('marketingPurpose is required and must be specified');
        }
        if ($this->assetType === null) {
            throw new \InvalidArgumentException('assetType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->siteId !== null) {
            $queryParams['site_id'] = $this->siteId;
        }
        if ($this->miniProgramId !== null) {
            $queryParams['mini_program_id'] = $this->miniProgramId;
        }
        if ($this->assetId !== null) {
            $queryParams['asset_id'] = $this->assetId;
        }
        $queryParams['landing_type'] = $this->landingType;
        $queryParams['marketing_purpose'] = $this->marketingPurpose;
        $queryParams['asset_type'] = $this->assetType;
        if ($this->campaignType !== null) {
            $queryParams['campaign_type'] = $this->campaignType;
        }
        if ($this->microAppInstanceId !== null) {
            $queryParams['micro_app_instance_id'] = $this->microAppInstanceId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/event_convert/optimized_goal/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEventConvertOptimizedGoalGetV30Response::class);

        return $result['model'];
    }
}
