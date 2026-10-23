<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bids_suggest_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过广告分析查询广告的建议出价
 */
class ApiOpenApiV30ToolsBidsSuggestGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $pricing = null;
    private ?string $externalAction = null;
    private ?int $projectId = null;
    private ?string $deepExternalAction = null;
    private ?string $deepBidType = null;
    /** @var string[] 定向目标平台 */
    private ?array $platform = null;
    /** @var string 营销目标 */
    private ?string $marketingGoal = null;
    /** @var string 项目类型 */
    private ?string $campaignType = null;
    /** @var string 应用包名 */
    private ?string $packageName = null;
    /** @var string 微信小程序/小游戏原始ID */
    private ?string $userName = null;
    /** @var string 字节小程序/小游戏的app id */
    private ?string $appId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsBidsSuggestV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function pricing(string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    public function projectId(int $projectId): self
    {
        $this->projectId = $projectId;
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

    /**
     * 定向目标平台
     */
    public function platform(array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 营销目标
     */
    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 项目类型
     */
    public function campaignType(string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * 应用包名
     */
    public function packageName(string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * 微信小程序/小游戏原始ID
     */
    public function userName(string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * 字节小程序/小游戏的app id
     */
    public function appId(string $appId): self
    {
        $this->appId = $appId;
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
     * 通过广告分析查询广告的建议出价
     */
    public function execute(): \Oceanengine\Models\ToolsBidsSuggestV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->pricing === null) {
            throw new \InvalidArgumentException('pricing is required and must be specified');
        }
        if ($this->externalAction === null) {
            throw new \InvalidArgumentException('externalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->projectId !== null) {
            $queryParams['project_id'] = $this->projectId;
        }
        $queryParams['pricing'] = $this->pricing;
        $queryParams['external_action'] = $this->externalAction;
        if ($this->deepExternalAction !== null) {
            $queryParams['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deepBidType !== null) {
            $queryParams['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->platform !== null) {
            $queryParams['platform'] = $this->platform;
        }
        if ($this->marketingGoal !== null) {
            $queryParams['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->campaignType !== null) {
            $queryParams['campaign_type'] = $this->campaignType;
        }
        if ($this->packageName !== null) {
            $queryParams['package_name'] = $this->packageName;
        }
        if ($this->userName !== null) {
            $queryParams['user_name'] = $this->userName;
        }
        if ($this->appId !== null) {
            $queryParams['app_id'] = $this->appId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/bids/suggest/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsBidsSuggestV30Response::class);

        return $result['model'];
    }
}
