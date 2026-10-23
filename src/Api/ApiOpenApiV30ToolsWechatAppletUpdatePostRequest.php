<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_applet_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * OPENapi 场景更新小程序信息
 */
class ApiOpenApiV30ToolsWechatAppletUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsWechatAppletUpdateV30Request $toolsWechatAppletUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsWechatAppletUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsWechatAppletUpdateV30Request(\Oceanengine\Models\ToolsWechatAppletUpdateV30Request $toolsWechatAppletUpdateV30Request): self
    {
        $this->toolsWechatAppletUpdateV30Request = $toolsWechatAppletUpdateV30Request;
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
     * OPENapi 场景更新小程序信息
     */
    public function execute(): \Oceanengine\Models\ToolsWechatAppletUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsWechatAppletUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/wechat_applet/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsWechatAppletUpdateV30Response::class);

        return $result['model'];
    }
}
