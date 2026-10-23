<?php

/**
 * 本文件由 go2php 生成，源: api_local_action_keyword_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 行为关键词查询
 */
class ApiOpenApiV30LocalActionKeywordGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    private ?string $queryWords = null;
    /** @var string 行为天数枚举 */
    private ?string $actionDays = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalActionKeywordV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    public function queryWords(string $queryWords): self
    {
        $this->queryWords = $queryWords;
        return $this;
    }

    /**
     * 行为天数枚举
     */
    public function actionDays(string $actionDays): self
    {
        $this->actionDays = $actionDays;
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
     * 行为关键词查询
     */
    public function execute(): \Oceanengine\Models\LocalActionKeywordV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->queryWords === null) {
            throw new \InvalidArgumentException('queryWords is required and must be specified');
        }
        if ($this->actionDays === null) {
            throw new \InvalidArgumentException('actionDays is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['query_words'] = $this->queryWords;
        $queryParams['action_days'] = $this->actionDays;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/action/keyword/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalActionKeywordV30Response::class);

        return $result['model'];
    }
}
