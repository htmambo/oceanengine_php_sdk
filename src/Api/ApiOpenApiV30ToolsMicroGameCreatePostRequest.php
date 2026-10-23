<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建字节小游戏
 */
class ApiOpenApiV30ToolsMicroGameCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsMicroGameCreateV30Request $toolsMicroGameCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMicroGameCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsMicroGameCreateV30Request(\Oceanengine\Models\ToolsMicroGameCreateV30Request $toolsMicroGameCreateV30Request): self
    {
        $this->toolsMicroGameCreateV30Request = $toolsMicroGameCreateV30Request;
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
     * 创建字节小游戏
     */
    public function execute(): \Oceanengine\Models\ToolsMicroGameCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsMicroGameCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/micro_game/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMicroGameCreateV30Response::class);

        return $result['model'];
    }
}
