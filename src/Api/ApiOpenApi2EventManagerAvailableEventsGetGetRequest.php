<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_available_events_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口用于查询资产下支持创建的事件列表
 */
class ApiOpenApi2EventManagerAvailableEventsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 资产ID */
    private ?int $assetId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerAvailableEventsGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 资产ID
     */
    public function assetId(int $assetId): self
    {
        $this->assetId = $assetId;
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
     * 此接口用于查询资产下支持创建的事件列表
     */
    public function execute(): \Oceanengine\Models\EventManagerAvailableEventsGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->advertiserId > 9223372036854775807) {
            throw new \InvalidArgumentException('advertiserId must be less than 9223372036854775807');
        }
        if ($this->assetId === null) {
            throw new \InvalidArgumentException('assetId is required and must be specified');
        }
        if ($this->assetId < 1) {
            throw new \InvalidArgumentException('assetId must be greater than 1');
        }
        if ($this->assetId > 9223372036854775807) {
            throw new \InvalidArgumentException('assetId must be less than 9223372036854775807');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['asset_id'] = $this->assetId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/available_events/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerAvailableEventsGetV2Response::class);

        return $result['model'];
    }
}
