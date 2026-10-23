<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_budget_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新星广联投任务预算
 */
class ApiOpenApiV30StardeliveryTaskBudgetUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StardeliveryTaskBudgetUpdateV30Request $stardeliveryTaskBudgetUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskBudgetUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stardeliveryTaskBudgetUpdateV30Request(\Oceanengine\Models\StardeliveryTaskBudgetUpdateV30Request $stardeliveryTaskBudgetUpdateV30Request): self
    {
        $this->stardeliveryTaskBudgetUpdateV30Request = $stardeliveryTaskBudgetUpdateV30Request;
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
     * 更新星广联投任务预算
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskBudgetUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stardeliveryTaskBudgetUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task/budget/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskBudgetUpdateV30Response::class);

        return $result['model'];
    }
}
