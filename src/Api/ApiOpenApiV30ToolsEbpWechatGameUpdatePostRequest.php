<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_game_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新微信小游戏
 */
class ApiOpenApiV30ToolsEbpWechatGameUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpWechatGameUpdateV30Request $toolsEbpWechatGameUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpWechatGameUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpWechatGameUpdateV30Request(\Oceanengine\Models\ToolsEbpWechatGameUpdateV30Request $toolsEbpWechatGameUpdateV30Request): self
    {
        $this->toolsEbpWechatGameUpdateV30Request = $toolsEbpWechatGameUpdateV30Request;
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
     * 更新微信小游戏
     */
    public function execute(): \Oceanengine\Models\ToolsEbpWechatGameUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpWechatGameUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/wechat_game/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpWechatGameUpdateV30Response::class);

        return $result['model'];
    }
}
