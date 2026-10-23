<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_status_stop_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 关闭优选起量任务
 */
class ApiOpenApi2ToolsTaskRaiseStatusStopPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsTaskRaiseStatusStopV2Request $toolsTaskRaiseStatusStopV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsTaskRaiseStatusStopV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsTaskRaiseStatusStopV2Request(\Oceanengine\Models\ToolsTaskRaiseStatusStopV2Request $toolsTaskRaiseStatusStopV2Request): self
    {
        $this->toolsTaskRaiseStatusStopV2Request = $toolsTaskRaiseStatusStopV2Request;
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
     * 关闭优选起量任务
     */
    public function execute(): \Oceanengine\Models\ToolsTaskRaiseStatusStopV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsTaskRaiseStatusStopV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/task_raise/status/stop/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsTaskRaiseStatusStopV2Response::class);

        return $result['model'];
    }
}
