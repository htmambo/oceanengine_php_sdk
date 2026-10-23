<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_game_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 微信小游戏新建
 */
class ApiOpenApiV30ToolsEbpWechatGameCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpWechatGameCreateV30Request $toolsEbpWechatGameCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpWechatGameCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpWechatGameCreateV30Request(\Oceanengine\Models\ToolsEbpWechatGameCreateV30Request $toolsEbpWechatGameCreateV30Request): self
    {
        $this->toolsEbpWechatGameCreateV30Request = $toolsEbpWechatGameCreateV30Request;
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
     * 微信小游戏新建
     */
    public function execute(): \Oceanengine\Models\ToolsEbpWechatGameCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpWechatGameCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/wechat_game/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpWechatGameCreateV30Response::class);

        return $result['model'];
    }
}
