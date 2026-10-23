<?php

/**
 * 本文件由 go2php 生成，源: api_serve_market_active_func_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApiV10ServeMarketActiveFuncGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $useUid = null;
    private ?int $appId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?array $funcKeys = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ServeMarketActiveFuncGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function useUid(int $useUid): self
    {
        $this->useUid = $useUid;
        return $this;
    }

    public function appId(int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function funcKeys(array $funcKeys): self
    {
        $this->funcKeys = $funcKeys;
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
    public function execute(): \Oceanengine\Models\ServeMarketActiveFuncGetV10Response
    {
        if ($this->useUid === null) {
            throw new \InvalidArgumentException('useUid is required and must be specified');
        }
        if ($this->appId === null) {
            throw new \InvalidArgumentException('appId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['use_uid'] = $this->useUid;
        $queryParams['app_id'] = $this->appId;
        if ($this->funcKeys !== null) {
            $queryParams['func_keys'] = $this->funcKeys;
        }
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/serve_market/active_func/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ServeMarketActiveFuncGetV10Response::class);

        return $result['model'];
    }
}
