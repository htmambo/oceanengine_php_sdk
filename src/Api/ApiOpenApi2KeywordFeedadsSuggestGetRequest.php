<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_feedads_suggest_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2KeywordFeedadsSuggestGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $adId = null;
    private ?int $advertiserId = null;
    private ?int $reqKeywordType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(KeywordFeedadsSuggestV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function reqKeywordType(int $reqKeywordType): self
    {
        $this->reqKeywordType = $reqKeywordType;
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
    public function execute(): \Oceanengine\Models\KeywordFeedadsSuggestV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->adId !== null) {
            $queryParams['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->reqKeywordType !== null) {
            $queryParams['req_keyword_type'] = $this->reqKeywordType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/keyword_feedads/suggest/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\KeywordFeedadsSuggestV2Response::class);

        return $result['model'];
    }
}
