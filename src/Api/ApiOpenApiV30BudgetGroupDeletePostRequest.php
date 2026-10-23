<?php

/**
 * 本文件由 go2php 生成，源: api_budget_group_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除预算组，删除后关联的项目不受影响，继续以项目预算进行推广
 * - 预算组删除后不可恢复、不可见
 * - 预算组内无项目、项目均为已删除时，才支持删除预算组
 */
class ApiOpenApiV30BudgetGroupDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BudgetGroupDeleteV30Request $budgetGroupDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BudgetGroupDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function budgetGroupDeleteV30Request(\Oceanengine\Models\BudgetGroupDeleteV30Request $budgetGroupDeleteV30Request): self
    {
        $this->budgetGroupDeleteV30Request = $budgetGroupDeleteV30Request;
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
     * 删除预算组，删除后关联的项目不受影响，继续以项目预算进行推广
     */
    public function execute(): \Oceanengine\Models\BudgetGroupDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->budgetGroupDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/budget_group/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BudgetGroupDeleteV30Response::class);

        return $result['model'];
    }
}
