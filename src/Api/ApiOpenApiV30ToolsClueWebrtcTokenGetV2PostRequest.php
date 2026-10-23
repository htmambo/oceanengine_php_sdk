<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_webrtc_token_get_v2_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 飞鱼为开发者提供网络电话的呼叫能力，该接口功能是为客服生成网络电话坐席token，前端电话工具条登陆坐席时需要用到该token。
 */
class ApiOpenApiV30ToolsClueWebrtcTokenGetV2PostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueWebrtcTokenGetV2V30Request $toolsClueWebrtcTokenGetV2V30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueWebrtcTokenGetV2V30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueWebrtcTokenGetV2V30Request(\Oceanengine\Models\ToolsClueWebrtcTokenGetV2V30Request $toolsClueWebrtcTokenGetV2V30Request): self
    {
        $this->toolsClueWebrtcTokenGetV2V30Request = $toolsClueWebrtcTokenGetV2V30Request;
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
     * 飞鱼为开发者提供网络电话的呼叫能力，该接口功能是为客服生成网络电话坐席token，前端电话工具条登陆坐席时需要用到该token。
     */
    public function execute(): \Oceanengine\Models\ToolsClueWebrtcTokenGetV2V30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueWebrtcTokenGetV2V30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/clue/webrtc/token/get/v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueWebrtcTokenGetV2V30Response::class);

        return $result['model'];
    }
}
