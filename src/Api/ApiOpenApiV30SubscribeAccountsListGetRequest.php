<?php

/**
 * 本文件由 go2php 生成，源: api_subscribe_accounts_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询订阅任务所订阅的 Adv
 */
class ApiOpenApiV30SubscribeAccountsListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $aPPAccessToken = null;
    private ?int $appId = null;
    private ?int $subscribeTaskId = null;
    private ?array $events = null;
    private ?int $coreUserId = null;
    private ?array $advertiserIds = null;
    private ?array $statuses = null;
    private ?int $cursor = null;
    private ?int $count = null;
    private ?string $subscribePackageType = null;
    private ?string $source = null;
    private ?string $accountType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SubscribeAccountsListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aPPAccessToken(string $aPPAccessToken): self
    {
        $this->aPPAccessToken = $aPPAccessToken;
        return $this;
    }

    public function appId(int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function subscribeTaskId(int $subscribeTaskId): self
    {
        $this->subscribeTaskId = $subscribeTaskId;
        return $this;
    }

    public function events(array $events): self
    {
        $this->events = $events;
        return $this;
    }

    public function coreUserId(int $coreUserId): self
    {
        $this->coreUserId = $coreUserId;
        return $this;
    }

    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    public function statuses(array $statuses): self
    {
        $this->statuses = $statuses;
        return $this;
    }

    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function count(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function subscribePackageType(string $subscribePackageType): self
    {
        $this->subscribePackageType = $subscribePackageType;
        return $this;
    }

    public function source(string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
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
     * 查询订阅任务所订阅的 Adv
     */
    public function execute(): \Oceanengine\Models\SubscribeAccountsListV30Response
    {
        if ($this->aPPAccessToken === null) {
            throw new \InvalidArgumentException('aPPAccessToken is required and must be specified');
        }
        if ($this->appId === null) {
            throw new \InvalidArgumentException('appId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['app_id'] = $this->appId;
        if ($this->subscribeTaskId !== null) {
            $queryParams['subscribe_task_id'] = $this->subscribeTaskId;
        }
        if ($this->events !== null) {
            $queryParams['events'] = $this->events;
        }
        if ($this->coreUserId !== null) {
            $queryParams['core_user_id'] = $this->coreUserId;
        }
        if ($this->advertiserIds !== null) {
            $queryParams['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->statuses !== null) {
            $queryParams['statuses'] = $this->statuses;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        if ($this->subscribePackageType !== null) {
            $queryParams['subscribe_package_type'] = $this->subscribePackageType;
        }
        if ($this->source !== null) {
            $queryParams['source'] = $this->source;
        }
        if ($this->accountType !== null) {
            $queryParams['account_type'] = $this->accountType;
        }
        $headers['APP-Access-Token'] = $this->aPPAccessToken;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/subscribe/accounts/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SubscribeAccountsListV30Response::class);

        return $result['model'];
    }
}
