<?php

/**
 * 本文件由 go2php 生成，源: api_budget_group_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 新建预算组，预算组可设置多个项目的预算（日预算）
 * 注意：一个账户下同时最多存在 200 个有效的预算组，超过请先删除无用预算组
 */
class ApiOpenApiV30BudgetGroupCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BudgetGroupCreateV30Request $budgetGroupCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BudgetGroupCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function budgetGroupCreateV30Request(\Oceanengine\Models\BudgetGroupCreateV30Request $budgetGroupCreateV30Request): self
    {
        $this->budgetGroupCreateV30Request = $budgetGroupCreateV30Request;
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
     * 新建预算组，预算组可设置多个项目的预算（日预算）
     */
    public function execute(): \Oceanengine\Models\BudgetGroupCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->budgetGroupCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/budget_group/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BudgetGroupCreateV30Response::class);

        return $result['model'];
    }
}
