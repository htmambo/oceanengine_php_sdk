<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_agent_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以通过传入视频id和投放设置(setting)创建对应的前测任务
 */
class ApiOpenApi2DiagnosisTaskAgentCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DiagnosisTaskAgentCreateV2Request $diagnosisTaskAgentCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DiagnosisTaskAgentCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function diagnosisTaskAgentCreateV2Request(\Oceanengine\Models\DiagnosisTaskAgentCreateV2Request $diagnosisTaskAgentCreateV2Request): self
    {
        $this->diagnosisTaskAgentCreateV2Request = $diagnosisTaskAgentCreateV2Request;
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
     * 通过此接口，用户可以通过传入视频id和投放设置(setting)创建对应的前测任务
     */
    public function execute(): \Oceanengine\Models\DiagnosisTaskAgentCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->diagnosisTaskAgentCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/diagnosis_task/agent/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DiagnosisTaskAgentCreateV2Response::class);

        return $result['model'];
    }
}
