<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_convert_window_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改字节小游戏归因激活时间窗
 */
class ApiOpenApiV30ToolsMicroGameConvertWindowUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30Request $toolsMicroGameConvertWindowUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMicroGameConvertWindowUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsMicroGameConvertWindowUpdateV30Request(\Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30Request $toolsMicroGameConvertWindowUpdateV30Request): self
    {
        $this->toolsMicroGameConvertWindowUpdateV30Request = $toolsMicroGameConvertWindowUpdateV30Request;
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
     * 修改字节小游戏归因激活时间窗
     */
    public function execute(): \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsMicroGameConvertWindowUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/micro_game/convert_window/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMicroGameConvertWindowUpdateV30Response::class);

        return $result['model'];
    }
}
