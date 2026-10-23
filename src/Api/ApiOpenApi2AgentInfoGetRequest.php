<?php

/**
 * 本文件由 go2php 生成，源: api_agent_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取代理商信息
 */
class ApiOpenApi2AgentInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $advertiserIds = null;
    private ?array $fields = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentInfoV2ApiService $service)
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
     * 获取代理商信息
     */
    public function execute(): \Oceanengine\Models\AgentInfoV2Response
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentInfoV2Response::class);

        return $result['model'];
    }
}
