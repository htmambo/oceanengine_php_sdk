<?php

/**
 * 本文件由 go2php 生成，源: api_budget_group_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新预算组名称和日预算
 * 注意：
 * 1. 名称不能跟未删除的预算组重名
 * 2. 预算不得低于关联的项目、广告出价，不得低于已有消耗
 * 2. 一天最多更新 20 次
 */
class ApiOpenApiV30BudgetGroupUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BudgetGroupUpdateV30Request $budgetGroupUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BudgetGroupUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function budgetGroupUpdateV30Request(\Oceanengine\Models\BudgetGroupUpdateV30Request $budgetGroupUpdateV30Request): self
    {
        $this->budgetGroupUpdateV30Request = $budgetGroupUpdateV30Request;
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
     * 更新预算组名称和日预算
     */
    public function execute(): \Oceanengine\Models\BudgetGroupUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->budgetGroupUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/budget_group/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BudgetGroupUpdateV30Response::class);

        return $result['model'];
    }
}
