<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新字节小游戏
 */
class ApiOpenApiV30ToolsMicroGameUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsMicroGameUpdateV30Request $toolsMicroGameUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMicroGameUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsMicroGameUpdateV30Request(\Oceanengine\Models\ToolsMicroGameUpdateV30Request $toolsMicroGameUpdateV30Request): self
    {
        $this->toolsMicroGameUpdateV30Request = $toolsMicroGameUpdateV30Request;
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
     * 更新字节小游戏
     */
    public function execute(): \Oceanengine\Models\ToolsMicroGameUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsMicroGameUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/micro_game/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMicroGameUpdateV30Response::class);

        return $result['model'];
    }
}
