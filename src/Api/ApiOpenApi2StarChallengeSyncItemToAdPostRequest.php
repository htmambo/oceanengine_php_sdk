<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_sync_item_to_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 星图视频推送广告通用API
 */
class ApiOpenApi2StarChallengeSyncItemToAdPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarChallengeSyncItemToAdV2Request $starChallengeSyncItemToAdV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarChallengeSyncItemToAdV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starChallengeSyncItemToAdV2Request(\Oceanengine\Models\StarChallengeSyncItemToAdV2Request $starChallengeSyncItemToAdV2Request): self
    {
        $this->starChallengeSyncItemToAdV2Request = $starChallengeSyncItemToAdV2Request;
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
     * 星图视频推送广告通用API
     */
    public function execute(): \Oceanengine\Models\StarChallengeSyncItemToAdV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starChallengeSyncItemToAdV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/challenge/sync_item_to_ad/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarChallengeSyncItemToAdV2Response::class);

        return $result['model'];
    }
}
