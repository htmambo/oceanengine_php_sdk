<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 搜索广告关键词更新
 */
class ApiOpenApiV30KeywordUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\KeywordUpdateV30Request $keywordUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(KeywordUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function keywordUpdateV30Request(\Oceanengine\Models\KeywordUpdateV30Request $keywordUpdateV30Request): self
    {
        $this->keywordUpdateV30Request = $keywordUpdateV30Request;
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
     * 搜索广告关键词更新
     */
    public function execute(): \Oceanengine\Models\KeywordUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->keywordUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/keyword/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\KeywordUpdateV30Response::class);

        return $result['model'];
    }
}
