<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_share_cancel_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 事件管理资产取消共享
 */
class ApiOpenApiV30EventManagerShareCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EventManagerShareCancelV30Request $eventManagerShareCancelV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerShareCancelV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function eventManagerShareCancelV30Request(\Oceanengine\Models\EventManagerShareCancelV30Request $eventManagerShareCancelV30Request): self
    {
        $this->eventManagerShareCancelV30Request = $eventManagerShareCancelV30Request;
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
     * 事件管理资产取消共享
     */
    public function execute(): \Oceanengine\Models\EventManagerShareCancelV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->eventManagerShareCancelV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/event_manager/share/cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerShareCancelV30Response::class);

        return $result['model'];
    }
}
