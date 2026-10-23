<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_applet_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * openapi 场景创建小程序
 */
class ApiOpenApiV30ToolsWechatAppletCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsWechatAppletCreateV30Request $toolsWechatAppletCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsWechatAppletCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsWechatAppletCreateV30Request(\Oceanengine\Models\ToolsWechatAppletCreateV30Request $toolsWechatAppletCreateV30Request): self
    {
        $this->toolsWechatAppletCreateV30Request = $toolsWechatAppletCreateV30Request;
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
     * openapi 场景创建小程序
     */
    public function execute(): \Oceanengine\Models\ToolsWechatAppletCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsWechatAppletCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/wechat_applet/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsWechatAppletCreateV30Response::class);

        return $result['model'];
    }
}
