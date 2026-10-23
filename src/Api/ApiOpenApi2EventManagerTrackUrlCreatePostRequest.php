<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_track_url_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2EventManagerTrackUrlCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EventManagerTrackUrlCreateV2Request $eventManagerTrackUrlCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerTrackUrlCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function eventManagerTrackUrlCreateV2Request(\Oceanengine\Models\EventManagerTrackUrlCreateV2Request $eventManagerTrackUrlCreateV2Request): self
    {
        $this->eventManagerTrackUrlCreateV2Request = $eventManagerTrackUrlCreateV2Request;
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
    public function execute(): \Oceanengine\Models\EventManagerTrackUrlCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->eventManagerTrackUrlCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/track_url/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerTrackUrlCreateV2Response::class);

        return $result['model'];
    }
}
