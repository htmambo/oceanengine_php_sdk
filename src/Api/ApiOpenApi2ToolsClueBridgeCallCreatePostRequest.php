<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_bridge_call_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 飞鱼pc端发起语音双呼
 */
class ApiOpenApi2ToolsClueBridgeCallCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueBridgeCallCreateV2Request $toolsClueBridgeCallCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueBridgeCallCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueBridgeCallCreateV2Request(\Oceanengine\Models\ToolsClueBridgeCallCreateV2Request $toolsClueBridgeCallCreateV2Request): self
    {
        $this->toolsClueBridgeCallCreateV2Request = $toolsClueBridgeCallCreateV2Request;
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
     * 飞鱼pc端发起语音双呼
     */
    public function execute(): \Oceanengine\Models\ToolsClueBridgeCallCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueBridgeCallCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/bridge_call/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueBridgeCallCreateV2Response::class);

        return $result['model'];
    }
}
