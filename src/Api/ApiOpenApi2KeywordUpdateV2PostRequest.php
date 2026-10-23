<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_update_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2KeywordUpdateV2PostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\KeywordUpdateV2V2Request $keywordUpdateV2V2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(KeywordUpdateV2V2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function keywordUpdateV2V2Request(\Oceanengine\Models\KeywordUpdateV2V2Request $keywordUpdateV2V2Request): self
    {
        $this->keywordUpdateV2V2Request = $keywordUpdateV2V2Request;
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
    public function execute(): \Oceanengine\Models\KeywordUpdateV2V2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->keywordUpdateV2V2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/keyword/update_v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\KeywordUpdateV2V2Response::class);

        return $result['model'];
    }
}
