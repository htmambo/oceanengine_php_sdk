<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_robot_task_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 取消机器人任务。
 */
class ApiOpenApi2ToolsClueRobotTaskCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueRobotTaskCancelV2Request $toolsClueRobotTaskCancelV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueRobotTaskCancelV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueRobotTaskCancelV2Request(\Oceanengine\Models\ToolsClueRobotTaskCancelV2Request $toolsClueRobotTaskCancelV2Request): self
    {
        $this->toolsClueRobotTaskCancelV2Request = $toolsClueRobotTaskCancelV2Request;
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
     * 取消机器人任务。
     */
    public function execute(): \Oceanengine\Models\ToolsClueRobotTaskCancelV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueRobotTaskCancelV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/robot/task/cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueRobotTaskCancelV2Response::class);

        return $result['model'];
    }
}
