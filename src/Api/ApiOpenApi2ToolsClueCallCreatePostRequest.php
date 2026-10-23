<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_call_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过入参“呼叫类型”，可以实现双呼、axb、网络等不同的呼叫方式。
 */
class ApiOpenApi2ToolsClueCallCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueCallCreateV2Request $toolsClueCallCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueCallCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueCallCreateV2Request(\Oceanengine\Models\ToolsClueCallCreateV2Request $toolsClueCallCreateV2Request): self
    {
        $this->toolsClueCallCreateV2Request = $toolsClueCallCreateV2Request;
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
     * 通过入参“呼叫类型”，可以实现双呼、axb、网络等不同的呼叫方式。
     */
    public function execute(): \Oceanengine\Models\ToolsClueCallCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueCallCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/call/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueCallCreateV2Response::class);

        return $result['model'];
    }
}
