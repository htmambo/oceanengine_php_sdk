<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_game_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * mapi场景创建微信小游戏
 */
class ApiOpenApiV30ToolsWechatGameCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsWechatGameCreateV30Request $toolsWechatGameCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsWechatGameCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsWechatGameCreateV30Request(\Oceanengine\Models\ToolsWechatGameCreateV30Request $toolsWechatGameCreateV30Request): self
    {
        $this->toolsWechatGameCreateV30Request = $toolsWechatGameCreateV30Request;
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
     * mapi场景创建微信小游戏
     */
    public function execute(): \Oceanengine\Models\ToolsWechatGameCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsWechatGameCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/wechat_game/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsWechatGameCreateV30Response::class);

        return $result['model'];
    }
}
