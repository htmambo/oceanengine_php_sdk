<?php

/**
 * 本文件由 go2php 生成，源: api_local_tool_pack_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询留资组件详情
 */
class ApiOpenApiV30LocalToolPackDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    private ?int $toolPackId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalToolPackDetailV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    public function toolPackId(int $toolPackId): self
    {
        $this->toolPackId = $toolPackId;
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
     * 查询留资组件详情
     */
    public function execute(): \Oceanengine\Models\LocalToolPackDetailV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->toolPackId === null) {
            throw new \InvalidArgumentException('toolPackId is required and must be specified');
        }
        if ($this->toolPackId < 1) {
            throw new \InvalidArgumentException('toolPackId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['tool_pack_id'] = $this->toolPackId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/tool_pack/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalToolPackDetailV30Response::class);

        return $result['model'];
    }
}
