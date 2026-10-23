<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_track_url_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2EventManagerTrackUrlUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EventManagerTrackUrlUpdateV2Request $eventManagerTrackUrlUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerTrackUrlUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function eventManagerTrackUrlUpdateV2Request(\Oceanengine\Models\EventManagerTrackUrlUpdateV2Request $eventManagerTrackUrlUpdateV2Request): self
    {
        $this->eventManagerTrackUrlUpdateV2Request = $eventManagerTrackUrlUpdateV2Request;
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
    public function execute(): \Oceanengine\Models\EventManagerTrackUrlUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->eventManagerTrackUrlUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/track_url/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerTrackUrlUpdateV2Response::class);

        return $result['model'];
    }
}
