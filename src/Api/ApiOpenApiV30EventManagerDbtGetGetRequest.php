<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_dbt_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * OC_获取可用dbt
 */
class ApiOpenApiV30EventManagerDbtGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 优化目标 */
    private ?string $externalAction = null;
    private ?string $landingType = null;
    private ?string $adType = null;
    private ?string $marketingGoal = null;
    /** @var int 资产id */
    private ?int $assetId = null;
    /** @var string 深度优化目标，当优化目标不等于AD_CONVERT_TYPE_PAY、AD_CONVERT_TYPE_FORM、AD_CONVERT_TYPE_MULTIPLE时深度优化目标必填 */
    private ?string $deepExternalAction = null;
    private ?string $valueOptimizedType = null;
    private ?string $deliveryMode = null;
    private ?string $productSetting = null;
    private ?string $multiDeliveryMedium = null;
    private ?string $deliveryMedium = null;
    private ?string $deliveryProduct = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerDbtGetV30ApiService $service)
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

    public function valueOptimizedType(string $valueOptimizedType): self
    {
        $this->valueOptimizedType = $valueOptimizedType;
        return $this;
    }

    public function deliveryMode(string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    public function productSetting(string $productSetting): self
    {
        $this->productSetting = $productSetting;
        return $this;
    }

    public function multiDeliveryMedium(string $multiDeliveryMedium): self
    {
        $this->multiDeliveryMedium = $multiDeliveryMedium;
        return $this;
    }

    public function deliveryMedium(string $deliveryMedium): self
    {
        $this->deliveryMedium = $deliveryMedium;
        return $this;
    }

    public function deliveryProduct(string $deliveryProduct): self
    {
        $this->deliveryProduct = $deliveryProduct;
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
     * OC_获取可用dbt
     */
    public function execute(): \Oceanengine\Models\EventManagerDbtGetV30Response
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
        if ($this->landingType !== null) {
            $queryParams['landing_type'] = $this->landingType;
        }
        if ($this->adType !== null) {
            $queryParams['ad_type'] = $this->adType;
        }
        if ($this->marketingGoal !== null) {
            $queryParams['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->assetId !== null) {
            $queryParams['asset_id'] = $this->assetId;
        }
        $queryParams['external_action'] = $this->externalAction;
        if ($this->deepExternalAction !== null) {
            $queryParams['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->valueOptimizedType !== null) {
            $queryParams['value_optimized_type'] = $this->valueOptimizedType;
        }
        if ($this->deliveryMode !== null) {
            $queryParams['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->productSetting !== null) {
            $queryParams['product_setting'] = $this->productSetting;
        }
        if ($this->multiDeliveryMedium !== null) {
            $queryParams['multi_delivery_medium'] = $this->multiDeliveryMedium;
        }
        if ($this->deliveryMedium !== null) {
            $queryParams['delivery_medium'] = $this->deliveryMedium;
        }
        if ($this->deliveryProduct !== null) {
            $queryParams['delivery_product'] = $this->deliveryProduct;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/event_manager/dbt/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerDbtGetV30Response::class);

        return $result['model'];
    }
}
