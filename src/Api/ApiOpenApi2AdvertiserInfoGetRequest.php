<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2AdvertiserInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $advertiserIds = null;
    private ?array $fields = null;
    private ?bool $isSearchAgent = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserInfoV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function isSearchAgent(bool $isSearchAgent): self
    {
        $this->isSearchAgent = $isSearchAgent;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\AdvertiserInfoV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserIds !== null) {
            $queryParams['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->fields !== null) {
            $queryParams['fields'] = $this->fields;
        }
        if ($this->isSearchAgent !== null) {
            $queryParams['is_search_agent'] = $this->isSearchAgent;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserInfoV2Response::class);

        return $result['model'];
    }
}
