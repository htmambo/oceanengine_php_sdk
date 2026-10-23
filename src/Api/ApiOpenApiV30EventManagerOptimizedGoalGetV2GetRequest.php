<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_optimized_goal_get_v2_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApiV30EventManagerOptimizedGoalGetV2GetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 推广目的，允许值：APP 应用推广 */
    private ?string $landingType = null;
    /** @var string 广告类型，允许值：ALL */
    private ?string $adType = null;
    /** @var string 资产类型，允许值：APP 应用 */
    private ?string $assetType = null;
    private ?string $multiAssetType = null;
    /** @var int 资产id */
    private ?int $assetId = null;
    /** @var string 应用包名称，当asset_type为应用APP时，若asset_id不为空，生效asset_id；若asset_id为空且package_name不为空时，生效package_name */
    private ?string $packageName = null;
    /** @var string 应用类型，当asset_type为应用APP时必填 可选值：ANDROID 、IOS */
    private ?string $appType = null;
    /** @var string 子目标，支持： DOWNLOAD（应用下载）、LAUNCH（应用调起）、RESERVE（预约下载） */
    private ?string $appPromotionType = null;
    /** @var string 营销场景， 允许值：VIDEO_AND_IMAGE 短视频/图片 LIVE直播 */
    private ?string $marketingGoal = null;
    /** @var int 快应用资产id */
    private ?int $quickAppId = null;
    /** @var string 投放模式 */
    private ?string $deliveryMode = null;
    private ?string $miniProgramId = null;
    private ?string $dpaAdtype = null;
    private ?string $microPromotionType = null;
    /** @var int 小程序资产id */
    private ?int $microAppInstanceId = null;
    private ?string $deliveryType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerOptimizedGoalGetV2V30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 推广目的，允许值：APP 应用推广
     */
    public function landingType(string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * 广告类型，允许值：ALL
     */
    public function adType(string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * 资产类型，允许值：APP 应用
     */
    public function assetType(string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    public function multiAssetType(string $multiAssetType): self
    {
        $this->multiAssetType = $multiAssetType;
        return $this;
    }

    /**
     * 资产id
     */
    public function assetId(int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 应用包名称，当asset_type为应用APP时，若asset_id不为空，生效asset_id；若asset_id为空且package_name不为空时，生效package_name
     */
    public function packageName(string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * 应用类型，当asset_type为应用APP时必填 可选值：ANDROID 、IOS
     */
    public function appType(string $appType): self
    {
        $this->appType = $appType;
        return $this;
    }

    /**
     * 子目标，支持： DOWNLOAD（应用下载）、LAUNCH（应用调起）、RESERVE（预约下载）
     */
    public function appPromotionType(string $appPromotionType): self
    {
        $this->appPromotionType = $appPromotionType;
        return $this;
    }

    /**
     * 营销场景， 允许值：VIDEO_AND_IMAGE 短视频/图片 LIVE直播
     */
    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 快应用资产id
     */
    public function quickAppId(int $quickAppId): self
    {
        $this->quickAppId = $quickAppId;
        return $this;
    }

    /**
     * 投放模式
     */
    public function deliveryMode(string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    public function miniProgramId(string $miniProgramId): self
    {
        $this->miniProgramId = $miniProgramId;
        return $this;
    }

    public function dpaAdtype(string $dpaAdtype): self
    {
        $this->dpaAdtype = $dpaAdtype;
        return $this;
    }

    public function microPromotionType(string $microPromotionType): self
    {
        $this->microPromotionType = $microPromotionType;
        return $this;
    }

    /**
     * 小程序资产id
     */
    public function microAppInstanceId(int $microAppInstanceId): self
    {
        $this->microAppInstanceId = $microAppInstanceId;
        return $this;
    }

    public function deliveryType(string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\EventManagerOptimizedGoalGetV2V30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->landingType === null) {
            throw new \InvalidArgumentException('landingType is required and must be specified');
        }
        if ($this->adType === null) {
            throw new \InvalidArgumentException('adType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['landing_type'] = $this->landingType;
        $queryParams['ad_type'] = $this->adType;
        if ($this->assetType !== null) {
            $queryParams['asset_type'] = $this->assetType;
        }
        if ($this->multiAssetType !== null) {
            $queryParams['multi_asset_type'] = $this->multiAssetType;
        }
        if ($this->assetId !== null) {
            $queryParams['asset_id'] = $this->assetId;
        }
        if ($this->packageName !== null) {
            $queryParams['package_name'] = $this->packageName;
        }
        if ($this->appType !== null) {
            $queryParams['app_type'] = $this->appType;
        }
        if ($this->appPromotionType !== null) {
            $queryParams['app_promotion_type'] = $this->appPromotionType;
        }
        if ($this->marketingGoal !== null) {
            $queryParams['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->quickAppId !== null) {
            $queryParams['quick_app_id'] = $this->quickAppId;
        }
        if ($this->deliveryMode !== null) {
            $queryParams['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->miniProgramId !== null) {
            $queryParams['mini_program_id'] = $this->miniProgramId;
        }
        if ($this->dpaAdtype !== null) {
            $queryParams['dpa_adtype'] = $this->dpaAdtype;
        }
        if ($this->microPromotionType !== null) {
            $queryParams['micro_promotion_type'] = $this->microPromotionType;
        }
        if ($this->microAppInstanceId !== null) {
            $queryParams['micro_app_instance_id'] = $this->microAppInstanceId;
        }
        if ($this->deliveryType !== null) {
            $queryParams['delivery_type'] = $this->deliveryType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/event_manager/optimized_goal/get_v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerOptimizedGoalGetV2V30Response::class);

        return $result['model'];
    }
}
