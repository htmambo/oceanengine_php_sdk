<?php

/**
 * 本文件由 go2php 生成，源: api_tools_interest_action_interest_keyword_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 兴趣关键词查询
 */
class ApiOpenApi2ToolsInterestActionInterestKeywordGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $queryWords = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsInterestActionInterestKeywordV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function queryWords(string $queryWords): self
    {
        $this->queryWords = $queryWords;
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
     * 兴趣关键词查询
     */
    public function execute(): \Oceanengine\Models\ToolsInterestActionInterestKeywordV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->queryWords === null) {
            throw new \InvalidArgumentException('queryWords is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['query_words'] = $this->queryWords;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/interest_action/interest/keyword/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsInterestActionInterestKeywordV2Response::class);

        return $result['model'];
    }
}
