<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_webrtc_create_v2_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 飞鱼为开发者提供网络电话的呼叫能力，该接口功能是为前端电话工具条呼叫时，提供需要用到信息。
 */
class ApiOpenApiV30ToolsClueWebrtcCreateV2PostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueWebrtcCreateV2V30Request $toolsClueWebrtcCreateV2V30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueWebrtcCreateV2V30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueWebrtcCreateV2V30Request(\Oceanengine\Models\ToolsClueWebrtcCreateV2V30Request $toolsClueWebrtcCreateV2V30Request): self
    {
        $this->toolsClueWebrtcCreateV2V30Request = $toolsClueWebrtcCreateV2V30Request;
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
     * 飞鱼为开发者提供网络电话的呼叫能力，该接口功能是为前端电话工具条呼叫时，提供需要用到信息。
     */
    public function execute(): \Oceanengine\Models\ToolsClueWebrtcCreateV2V30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueWebrtcCreateV2V30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/clue/webrtc/create/v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueWebrtcCreateV2V30Response::class);

        return $result['model'];
    }
}
