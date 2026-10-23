<?php

/**
 * 本文件由 go2php 生成，源: api_aic_mixcut_task_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过task_id查询任务生成结果
 */
class ApiOpenApiV30AicMixcutTaskResultGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int BP账户体系:组织id，Agent账户体系:代理商id */
    private ?int $accountId = null;
    /** @var string 账户体系枚举 */
    private ?string $accountType = null;
    /** @var string 生成接口返回任务ID */
    private ?string $taskId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicMixcutTaskResultGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户体系枚举
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 生成接口返回任务ID
     */
    public function taskId(string $taskId): self
    {
        $this->taskId = $taskId;
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
     * 通过task_id查询任务生成结果
     */
    public function execute(): \Oceanengine\Models\AicMixcutTaskResultGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['task_id'] = $this->taskId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/mixcut_task/result/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicMixcutTaskResultGetV30Response::class);

        return $result['model'];
    }
}
