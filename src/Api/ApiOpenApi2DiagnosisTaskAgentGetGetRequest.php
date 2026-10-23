<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_agent_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商根据task_id获取前测结果
 */
class ApiOpenApi2DiagnosisTaskAgentGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $agentId = null;
    private ?array $taskIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DiagnosisTaskAgentGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    public function taskIds(array $taskIds): self
    {
        $this->taskIds = $taskIds;
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
     * 代理商根据task_id获取前测结果
     */
    public function execute(): \Oceanengine\Models\DiagnosisTaskAgentGetV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        if ($this->taskIds !== null) {
            $queryParams['task_ids'] = $this->taskIds;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/diagnosis_task/agent/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DiagnosisTaskAgentGetV2Response::class);

        return $result['model'];
    }
}
