<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_events_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * > 此接口用于在资产下创建单个事件
 * 需要线通过【获取推广内容】接口获取要创建的资产ID（asset_id）
 * 需要先通过【获取可创建事件】接口获取到某资产下支持创建的事件ID（event_id）
 * 当资产类型是三方落地页时，同资产同事件支持多种回传方式，但XPATH不能与JSSDK和EXTERNAL_API同时存在
 */
class ApiOpenApi2EventManagerEventsCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EventManagerEventsCreateV2Request $eventManagerEventsCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerEventsCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function eventManagerEventsCreateV2Request(\Oceanengine\Models\EventManagerEventsCreateV2Request $eventManagerEventsCreateV2Request): self
    {
        $this->eventManagerEventsCreateV2Request = $eventManagerEventsCreateV2Request;
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
     * > 此接口用于在资产下创建单个事件
     */
    public function execute(): \Oceanengine\Models\EventManagerEventsCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->eventManagerEventsCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/events/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerEventsCreateV2Response::class);

        return $result['model'];
    }
}
