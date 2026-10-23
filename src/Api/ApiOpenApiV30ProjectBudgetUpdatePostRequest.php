<?php

/**
 * 本文件由 go2php 生成，源: api_project_budget_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创编2.0批量更新项目预算
 */
class ApiOpenApiV30ProjectBudgetUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectBudgetUpdateV30Request $projectBudgetUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectBudgetUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectBudgetUpdateV30Request(\Oceanengine\Models\ProjectBudgetUpdateV30Request $projectBudgetUpdateV30Request): self
    {
        $this->projectBudgetUpdateV30Request = $projectBudgetUpdateV30Request;
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
     * 创编2.0批量更新项目预算
     */
    public function execute(): \Oceanengine\Models\ProjectBudgetUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectBudgetUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project/budget/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectBudgetUpdateV30Response::class);

        return $result['model'];
    }
}
