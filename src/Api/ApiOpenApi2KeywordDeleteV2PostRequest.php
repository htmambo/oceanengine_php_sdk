<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_delete_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2KeywordDeleteV2PostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\KeywordDeleteV2V2Request $keywordDeleteV2V2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(KeywordDeleteV2V2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function keywordDeleteV2V2Request(\Oceanengine\Models\KeywordDeleteV2V2Request $keywordDeleteV2V2Request): self
    {
        $this->keywordDeleteV2V2Request = $keywordDeleteV2V2Request;
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
    public function execute(): \Oceanengine\Models\KeywordDeleteV2V2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->keywordDeleteV2V2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/keyword/delete_v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\KeywordDeleteV2V2Response::class);

        return $result['model'];
    }
}
