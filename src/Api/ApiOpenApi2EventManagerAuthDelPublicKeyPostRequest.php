<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_auth_del_public_key_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除公钥
 */
class ApiOpenApi2EventManagerAuthDelPublicKeyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EventManagerAuthDelPublicKeyV2Request $eventManagerAuthDelPublicKeyV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerAuthDelPublicKeyV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function eventManagerAuthDelPublicKeyV2Request(\Oceanengine\Models\EventManagerAuthDelPublicKeyV2Request $eventManagerAuthDelPublicKeyV2Request): self
    {
        $this->eventManagerAuthDelPublicKeyV2Request = $eventManagerAuthDelPublicKeyV2Request;
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
     * 删除公钥
     */
    public function execute(): \Oceanengine\Models\EventManagerAuthDelPublicKeyV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->eventManagerAuthDelPublicKeyV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/auth/del_public_key/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerAuthDelPublicKeyV2Response::class);

        return $result['model'];
    }
}
