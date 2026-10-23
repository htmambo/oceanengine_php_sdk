<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 新建优选起量任务
 */
class ApiOpenApi2ToolsTaskRaiseCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsTaskRaiseCreateV2Request $toolsTaskRaiseCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsTaskRaiseCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsTaskRaiseCreateV2Request(\Oceanengine\Models\ToolsTaskRaiseCreateV2Request $toolsTaskRaiseCreateV2Request): self
    {
        $this->toolsTaskRaiseCreateV2Request = $toolsTaskRaiseCreateV2Request;
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
     * 新建优选起量任务
     */
    public function execute(): \Oceanengine\Models\ToolsTaskRaiseCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsTaskRaiseCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/task_raise/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsTaskRaiseCreateV2Response::class);

        return $result['model'];
    }
}
