<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_adv_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * Adv根据task_id获取前测结果
 */
class ApiOpenApi2DiagnosisTaskAdvGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $taskIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DiagnosisTaskAdvGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * Adv根据task_id获取前测结果
     */
    public function execute(): \Oceanengine\Models\DiagnosisTaskAdvGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->taskIds !== null) {
            $queryParams['task_ids'] = $this->taskIds;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/diagnosis_task/adv/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DiagnosisTaskAdvGetV2Response::class);

        return $result['model'];
    }
}
