<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_suggest_roi_goal_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取建议roi目标
 */
class ApiOpenApiV10QianchuanSuggestRoiGoalGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 抖音id */
    private ?int $awemeId = null;
    /** @var string 营销场景 */
    private ?string $marketingScene = null;
    /** @var string MarGoal */
    private ?string $marketingGoal = null;
    /** @var int 商品ID */
    private ?int $productId = null;
    /** @var bool 是否开启新品加速 */
    private ?bool $productNewOpen = null;
    private ?string $externalAction = null;
    private ?string $campaignScene = null;
    private ?string $deepExternalAction = null;
    private ?string $deepBidType = null;
    private ?string $ecomGuestType = null;
    private ?int $shopId = null;
    private ?int $brandId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanSuggestRoiGoalV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 抖音id
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 营销场景
     */
    public function marketingScene(string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * MarGoal
     */
    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 商品ID
     */
    public function productId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 是否开启新品加速
     */
    public function productNewOpen(bool $productNewOpen): self
    {
        $this->productNewOpen = $productNewOpen;
        return $this;
    }

    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    public function campaignScene(string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
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

    public function ecomGuestType(string $ecomGuestType): self
    {
        $this->ecomGuestType = $ecomGuestType;
        return $this;
    }

    public function shopId(int $shopId): self
    {
        $this->shopId = $shopId;
        return $this;
    }

    public function brandId(int $brandId): self
    {
        $this->brandId = $brandId;
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
     * 获取建议roi目标
     */
    public function execute(): \Oceanengine\Models\QianchuanSuggestRoiGoalV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->marketingScene !== null) {
            $queryParams['marketing_scene'] = $this->marketingScene;
        }
        if ($this->marketingGoal !== null) {
            $queryParams['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->productId !== null) {
            $queryParams['product_id'] = $this->productId;
        }
        if ($this->productNewOpen !== null) {
            $queryParams['product_new_open'] = $this->productNewOpen;
        }
        if ($this->externalAction !== null) {
            $queryParams['external_action'] = $this->externalAction;
        }
        if ($this->campaignScene !== null) {
            $queryParams['campaign_scene'] = $this->campaignScene;
        }
        if ($this->deepExternalAction !== null) {
            $queryParams['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deepBidType !== null) {
            $queryParams['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->ecomGuestType !== null) {
            $queryParams['ecom_guest_type'] = $this->ecomGuestType;
        }
        if ($this->shopId !== null) {
            $queryParams['shop_id'] = $this->shopId;
        }
        if ($this->brandId !== null) {
            $queryParams['brand_id'] = $this->brandId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/suggest/roi/goal/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanSuggestRoiGoalV10Response::class);

        return $result['model'];
    }
}
