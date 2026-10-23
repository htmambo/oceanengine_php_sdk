<?php

/**
 * 本文件由 go2php 生成，源: api_local_budget_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新账户日预算
 */
class ApiOpenApiV30LocalBudgetUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalBudgetUpdateV30Request $localBudgetUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalBudgetUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localBudgetUpdateV30Request(\Oceanengine\Models\LocalBudgetUpdateV30Request $localBudgetUpdateV30Request): self
    {
        $this->localBudgetUpdateV30Request = $localBudgetUpdateV30Request;
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
     * 更新账户日预算
     */
    public function execute(): \Oceanengine\Models\LocalBudgetUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localBudgetUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/budget/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalBudgetUpdateV30Response::class);

        return $result['model'];
    }
}
