<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_disable_check_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投放账户注销前置校验接口，判断账户是否满足注销条件
 */
class ApiOpenApi2AdvertiserDisableCheckGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 投放账户id */
    private ?int $advertiserIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserDisableCheckGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 投放账户id
     */
    public function advertiserIds(int $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
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
     * 投放账户注销前置校验接口，判断账户是否满足注销条件
     */
    public function execute(): \Oceanengine\Models\AdvertiserDisableCheckGetV2Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/disable/check/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserDisableCheckGetV2Response::class);

        return $result['model'];
    }
}
