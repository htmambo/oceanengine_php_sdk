<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_share_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 事件管理资产共享
 */
class ApiOpenApiV30EventManagerSharePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EventManagerShareV30Request $eventManagerShareV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerShareV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function eventManagerShareV30Request(\Oceanengine\Models\EventManagerShareV30Request $eventManagerShareV30Request): self
    {
        $this->eventManagerShareV30Request = $eventManagerShareV30Request;
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
     * 事件管理资产共享
     */
    public function execute(): \Oceanengine\Models\EventManagerShareV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->eventManagerShareV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/event_manager/share/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerShareV30Response::class);

        return $result['model'];
    }
}
