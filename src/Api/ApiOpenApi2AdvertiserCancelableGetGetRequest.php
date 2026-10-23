<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_cancelable_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 账户注销校验，判断账户因为哪些条件不能注销
 */
class ApiOpenApi2AdvertiserCancelableGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户 id */
    private ?int $advertiserIds = null;
    /** @var int 用户 id */
    private ?int $userId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserCancelableGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户 id
     */
    public function advertiserIds(int $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 用户 id
     */
    public function userId(int $userId): self
    {
        $this->userId = $userId;
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
     * 账户注销校验，判断账户因为哪些条件不能注销
     */
    public function execute(): \Oceanengine\Models\AdvertiserCancelableGetV2Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        if ($this->userId !== null) {
            $queryParams['user_id'] = $this->userId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/cancelable/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserCancelableGetV2Response::class);

        return $result['model'];
    }
}
