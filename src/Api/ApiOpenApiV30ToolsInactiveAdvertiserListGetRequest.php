<?php

/**
 * 本文件由 go2php 生成，源: api_tools_inactive_advertiser_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询近期请求记录中不活跃的账户列表
 */
class ApiOpenApiV30ToolsInactiveAdvertiserListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $appId = null;
    private ?int $cursor = null;
    private ?int $count = null;
    private ?string $advertiserType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsInactiveAdvertiserListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function appId(int $appId): self
    {
        $this->appId = $appId;
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

    public function advertiserType(string $advertiserType): self
    {
        $this->advertiserType = $advertiserType;
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
     * 查询近期请求记录中不活跃的账户列表
     */
    public function execute(): \Oceanengine\Models\ToolsInactiveAdvertiserListV30Response
    {
        if ($this->appId === null) {
            throw new \InvalidArgumentException('appId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['app_id'] = $this->appId;
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        if ($this->advertiserType !== null) {
            $queryParams['advertiser_type'] = $this->advertiserType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/inactive_advertiser/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsInactiveAdvertiserListV30Response::class);

        return $result['model'];
    }
}
