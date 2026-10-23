<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_estimate_audience_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 定向受众预估
 */
class ApiOpenApiV10QianchuanToolsEstimateAudienceGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    private ?string $externalAction = null;
    private ?int $productId = null;
    private ?int $awemeId = null;
    private ?\Oceanengine\Models\QianchuanToolsEstimateAudienceV10Audience $audience = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsEstimateAudienceV10ApiService $service)
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

    public function productId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function audience(\Oceanengine\Models\QianchuanToolsEstimateAudienceV10Audience $audience): self
    {
        $this->audience = $audience;
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
     * 定向受众预估
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsEstimateAudienceV10Response
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
        if ($this->productId !== null) {
            $queryParams['product_id'] = $this->productId;
        }
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->audience !== null) {
            $__encoded0 = json_encode($this->audience);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: audience');
            }
            $queryParams['audience'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/estimate_audience/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsEstimateAudienceV10Response::class);

        return $result['model'];
    }
}
