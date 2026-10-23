<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_robot_script_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询机器人剧本列表
 */
class ApiOpenApi2ToolsClueRobotScriptQueryPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueRobotScriptQueryV2Request $toolsClueRobotScriptQueryV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueRobotScriptQueryV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueRobotScriptQueryV2Request(\Oceanengine\Models\ToolsClueRobotScriptQueryV2Request $toolsClueRobotScriptQueryV2Request): self
    {
        $this->toolsClueRobotScriptQueryV2Request = $toolsClueRobotScriptQueryV2Request;
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
     * 查询机器人剧本列表
     */
    public function execute(): \Oceanengine\Models\ToolsClueRobotScriptQueryV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueRobotScriptQueryV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/robot/script/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueRobotScriptQueryV2Response::class);

        return $result['model'];
    }
}
