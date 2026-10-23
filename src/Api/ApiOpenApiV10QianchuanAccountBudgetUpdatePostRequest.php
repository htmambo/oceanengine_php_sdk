<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_account_budget_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新账户日预算
 */
class ApiOpenApiV10QianchuanAccountBudgetUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAccountBudgetUpdateV10Request $qianchuanAccountBudgetUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAccountBudgetUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAccountBudgetUpdateV10Request(\Oceanengine\Models\QianchuanAccountBudgetUpdateV10Request $qianchuanAccountBudgetUpdateV10Request): self
    {
        $this->qianchuanAccountBudgetUpdateV10Request = $qianchuanAccountBudgetUpdateV10Request;
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
    public function execute(): \Oceanengine\Models\QianchuanAccountBudgetUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAccountBudgetUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/account/budget/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAccountBudgetUpdateV10Response::class);

        return $result['model'];
    }
}
