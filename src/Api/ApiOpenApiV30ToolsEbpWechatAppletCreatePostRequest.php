<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_applet_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 新建微小
 */
class ApiOpenApiV30ToolsEbpWechatAppletCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpWechatAppletCreateV30Request $toolsEbpWechatAppletCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpWechatAppletCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpWechatAppletCreateV30Request(\Oceanengine\Models\ToolsEbpWechatAppletCreateV30Request $toolsEbpWechatAppletCreateV30Request): self
    {
        $this->toolsEbpWechatAppletCreateV30Request = $toolsEbpWechatAppletCreateV30Request;
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
     * 新建微小
     */
    public function execute(): \Oceanengine\Models\ToolsEbpWechatAppletCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpWechatAppletCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/wechat_applet/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpWechatAppletCreateV30Response::class);

        return $result['model'];
    }
}
