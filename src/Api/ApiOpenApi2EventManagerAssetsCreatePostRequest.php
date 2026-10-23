<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_assets_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口用于创建广告账户下资产
 */
class ApiOpenApi2EventManagerAssetsCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EventManagerAssetsCreateV2Request $eventManagerAssetsCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerAssetsCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function eventManagerAssetsCreateV2Request(\Oceanengine\Models\EventManagerAssetsCreateV2Request $eventManagerAssetsCreateV2Request): self
    {
        $this->eventManagerAssetsCreateV2Request = $eventManagerAssetsCreateV2Request;
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
     * 此接口用于创建广告账户下资产
     */
    public function execute(): \Oceanengine\Models\EventManagerAssetsCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->eventManagerAssetsCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/assets/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerAssetsCreateV2Response::class);

        return $result['model'];
    }
}
