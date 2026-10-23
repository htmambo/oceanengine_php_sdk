<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_suggest_roi_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全域推广控成本计划建议支付ROI目标
 */
class ApiOpenApiV10QianchuanUniAwemeSuggestRoiGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    private ?int $awemeId = null;
    private ?string $deepExternalAction = null;
    private ?array $productIds = null;
    private ?int $adId = null;
    private ?int $taskId = null;
    private ?string $scene = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniAwemeSuggestRoiV10ApiService $service)
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

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function deepExternalAction(string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    public function productIds(array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    public function taskId(int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    public function scene(string $scene): self
    {
        $this->scene = $scene;
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
     * 获取全域推广控成本计划建议支付ROI目标
     */
    public function execute(): \Oceanengine\Models\QianchuanUniAwemeSuggestRoiV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->awemeId < 1) {
            throw new \InvalidArgumentException('awemeId must be greater than 1');
        }
        if ($this->deepExternalAction === null) {
            throw new \InvalidArgumentException('deepExternalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['deep_external_action'] = $this->deepExternalAction;
        if ($this->productIds !== null) {
            $queryParams['product_ids'] = $this->productIds;
        }
        if ($this->adId !== null) {
            $queryParams['ad_id'] = $this->adId;
        }
        if ($this->taskId !== null) {
            $queryParams['task_id'] = $this->taskId;
        }
        if ($this->scene !== null) {
            $queryParams['scene'] = $this->scene;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_aweme/suggest/roi/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniAwemeSuggestRoiV10Response::class);

        return $result['model'];
    }
}
