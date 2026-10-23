<?php

/**
 * 本文件由 go2php 生成，源: api_local_diagnosis_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取投放效果agent诊断结果
 */
class ApiOpenApiV30LocalDiagnosisResultGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 广告账户ID */
    private ?string $advId = null;
    /** @var string 用户query */
    private ?string $query = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalDiagnosisResultGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 广告账户ID
     */
    public function advId(string $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * 用户query
     */
    public function query(string $query): self
    {
        $this->query = $query;
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
     * 获取投放效果agent诊断结果
     */
    public function execute(): \Oceanengine\Models\LocalDiagnosisResultGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->advId === null) {
            throw new \InvalidArgumentException('advId is required and must be specified');
        }
        if ($this->query === null) {
            throw new \InvalidArgumentException('query is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['adv_id'] = $this->advId;
        $queryParams['query'] = $this->query;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/diagnosis_result/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalDiagnosisResultGetV30Response::class);

        return $result['model'];
    }
}
