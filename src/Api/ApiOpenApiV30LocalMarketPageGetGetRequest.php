<?php

/**
 * 本文件由 go2php 生成，源: api_local_market_page_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询营销页详情
 */
class ApiOpenApiV30LocalMarketPageGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var int[] 营销页ids */
    private ?array $marketPageIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalMarketPageGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 营销页ids
     */
    public function marketPageIds(array $marketPageIds): self
    {
        $this->marketPageIds = $marketPageIds;
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
     * 查询营销页详情
     */
    public function execute(): \Oceanengine\Models\LocalMarketPageGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->localAccountId < 1) {
            throw new \InvalidArgumentException('localAccountId must be greater than 1');
        }
        if ($this->marketPageIds === null) {
            throw new \InvalidArgumentException('marketPageIds is required and must be specified');
        }
        if (count($this->marketPageIds) < 1) {
            throw new \InvalidArgumentException('marketPageIds must have at least 1 elements');
        }
        if (count($this->marketPageIds) > 50) {
            throw new \InvalidArgumentException('marketPageIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['market_page_ids'] = $this->marketPageIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/market_page/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalMarketPageGetV30Response::class);

        return $result['model'];
    }
}
