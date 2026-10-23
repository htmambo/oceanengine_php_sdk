<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_deep_bid_type_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投放2.0获取可用深度优化方式
 */
class ApiOpenApiV30EventManagerDeepBidTypeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 优化目标 */
    private ?string $externalAction = null;
    /** @var int 资产id */
    private ?int $assetId = null;
    /** @var string 深度优化目标，当优化目标不等于AD_CONVERT_TYPE_PAY、AD_CONVERT_TYPE_FORM、AD_CONVERT_TYPE_MULTIPLE时深度优化目标必填 */
    private ?string $deepExternalAction = null;
    /** @var int 转化跟踪id */
    private ?int $convertId = null;
    private ?string $deliveryMode = null;
    private ?string $landingType = null;
    private ?string $adType = null;
    private ?string $marketingGoal = null;
    private ?string $microPromotionType = null;
    private ?string $productSetting = null;
    private ?string $valueOptimizedType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerDeepBidTypeGetV30ApiService $service)
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
     * 优化目标
     */
    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
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
     * 深度优化目标，当优化目标不等于AD_CONVERT_TYPE_PAY、AD_CONVERT_TYPE_FORM、AD_CONVERT_TYPE_MULTIPLE时深度优化目标必填
     */
    public function deepExternalAction(string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * 转化跟踪id
     */
    public function convertId(int $convertId): self
    {
        $this->convertId = $convertId;
        return $this;
    }

    public function deliveryMode(string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    public function landingType(string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    public function adType(string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function microPromotionType(string $microPromotionType): self
    {
        $this->microPromotionType = $microPromotionType;
        return $this;
    }

    public function productSetting(string $productSetting): self
    {
        $this->productSetting = $productSetting;
        return $this;
    }

    public function valueOptimizedType(string $valueOptimizedType): self
    {
        $this->valueOptimizedType = $valueOptimizedType;
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
     * 投放2.0获取可用深度优化方式
     */
    public function execute(): \Oceanengine\Models\EventManagerDeepBidTypeGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->externalAction === null) {
            throw new \InvalidArgumentException('externalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->assetId !== null) {
            $queryParams['asset_id'] = $this->assetId;
        }
        $queryParams['external_action'] = $this->externalAction;
        if ($this->deepExternalAction !== null) {
            $queryParams['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->convertId !== null) {
            $queryParams['convert_id'] = $this->convertId;
        }
        if ($this->deliveryMode !== null) {
            $queryParams['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->landingType !== null) {
            $queryParams['landing_type'] = $this->landingType;
        }
        if ($this->adType !== null) {
            $queryParams['ad_type'] = $this->adType;
        }
        if ($this->marketingGoal !== null) {
            $queryParams['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->microPromotionType !== null) {
            $queryParams['micro_promotion_type'] = $this->microPromotionType;
        }
        if ($this->productSetting !== null) {
            $queryParams['product_setting'] = $this->productSetting;
        }
        if ($this->valueOptimizedType !== null) {
            $queryParams['value_optimized_type'] = $this->valueOptimizedType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/event_manager/deep_bid_type/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerDeepBidTypeGetV30Response::class);

        return $result['model'];
    }
}
