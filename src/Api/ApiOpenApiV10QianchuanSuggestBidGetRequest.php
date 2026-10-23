<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_suggest_bid_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取非ROI目标建议出价
 */
class ApiOpenApiV10QianchuanSuggestBidGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    private ?string $externalAction = null;
    private ?int $awemeId = null;
    private ?int $productId = null;
    private ?string $campaignScene = null;
    private ?string $ecomGuestType = null;
    private ?int $shopId = null;
    private ?int $brandId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanSuggestBidV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function productId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function campaignScene(string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
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
     * 获取非ROI目标建议出价
     */
    public function execute(): \Oceanengine\Models\QianchuanSuggestBidV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->externalAction === null) {
            throw new \InvalidArgumentException('externalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        $queryParams['external_action'] = $this->externalAction;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->productId !== null) {
            $queryParams['product_id'] = $this->productId;
        }
        if ($this->campaignScene !== null) {
            $queryParams['campaign_scene'] = $this->campaignScene;
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
        $url = '/open_api/v1.0/qianchuan/suggest_bid/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanSuggestBidV10Response::class);

        return $result['model'];
    }
}
