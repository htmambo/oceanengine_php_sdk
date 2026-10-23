<?php

/**
 * 本文件由 go2php 生成，源: api_sugg_words_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 快投2.0获取推荐关键词
 */
class ApiOpenApiV30SuggWordsPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\SuggWordsV30Request $suggWordsV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SuggWordsV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function suggWordsV30Request(\Oceanengine\Models\SuggWordsV30Request $suggWordsV30Request): self
    {
        $this->suggWordsV30Request = $suggWordsV30Request;
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
     * 快投2.0获取推荐关键词
     */
    public function execute(): \Oceanengine\Models\SuggWordsV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->suggWordsV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/sugg_words/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SuggWordsV30Response::class);

        return $result['model'];
    }
}
