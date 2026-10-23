<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_allow_coupon_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * https://bytedance.feishu.cn/wiki/F5LcwvkR5iC17MkfmWCc82BenCd
 */
class ApiOpenApiV10QianchuanToolsAllowCouponGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    private ?string $campaignScene = null;
    private ?string $marketingScene = null;
    private ?array $awemeIds = null;
    private ?array $productIds = null;
    /** @var bool 是否为托管 */
    private ?bool $isLabAd = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsAllowCouponV10ApiService $service)
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

    public function campaignScene(string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
        return $this;
    }

    public function marketingScene(string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    public function awemeIds(array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    public function productIds(array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * 是否为托管
     */
    public function isLabAd(bool $isLabAd): self
    {
        $this->isLabAd = $isLabAd;
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
     * https://bytedance.feishu.cn/wiki/F5LcwvkR5iC17MkfmWCc82BenCd
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsAllowCouponV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->campaignScene === null) {
            throw new \InvalidArgumentException('campaignScene is required and must be specified');
        }
        if ($this->marketingScene === null) {
            throw new \InvalidArgumentException('marketingScene is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        $queryParams['campaign_scene'] = $this->campaignScene;
        $queryParams['marketing_scene'] = $this->marketingScene;
        if ($this->awemeIds !== null) {
            $queryParams['aweme_ids'] = $this->awemeIds;
        }
        if ($this->productIds !== null) {
            $queryParams['product_ids'] = $this->productIds;
        }
        if ($this->isLabAd !== null) {
            $queryParams['is_lab_ad'] = $this->isLabAd;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/allow_coupon/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsAllowCouponV10Response::class);

        return $result['model'];
    }
}
