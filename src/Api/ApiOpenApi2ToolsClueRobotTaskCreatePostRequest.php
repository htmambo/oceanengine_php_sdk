<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_robot_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建机器人任务。
 */
class ApiOpenApi2ToolsClueRobotTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueRobotTaskCreateV2Request $toolsClueRobotTaskCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueRobotTaskCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueRobotTaskCreateV2Request(\Oceanengine\Models\ToolsClueRobotTaskCreateV2Request $toolsClueRobotTaskCreateV2Request): self
    {
        $this->toolsClueRobotTaskCreateV2Request = $toolsClueRobotTaskCreateV2Request;
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
     * 创建机器人任务。
     */
    public function execute(): \Oceanengine\Models\ToolsClueRobotTaskCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueRobotTaskCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/robot/task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueRobotTaskCreateV2Response::class);

        return $result['model'];
    }
}
