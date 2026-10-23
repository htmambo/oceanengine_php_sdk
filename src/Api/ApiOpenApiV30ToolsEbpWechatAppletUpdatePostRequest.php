<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_applet_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新微信小程序
 */
class ApiOpenApiV30ToolsEbpWechatAppletUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30Request $toolsEbpWechatAppletUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpWechatAppletUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpWechatAppletUpdateV30Request(\Oceanengine\Models\ToolsEbpWechatAppletUpdateV30Request $toolsEbpWechatAppletUpdateV30Request): self
    {
        $this->toolsEbpWechatAppletUpdateV30Request = $toolsEbpWechatAppletUpdateV30Request;
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
     * 更新微信小程序
     */
    public function execute(): \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpWechatAppletUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/wechat_applet/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpWechatAppletUpdateV30Response::class);

        return $result['model'];
    }
}
