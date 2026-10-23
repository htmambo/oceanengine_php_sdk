<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_apply_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口为第三步，提交开票申请成功之后，用于查询申请中的发票开具结果。发票全部开具成功，返回处理成功
 */
class ApiOpenApiV30InvoiceApplyResultGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 投放账户ID */
    private ?int $accountId = null;
    /** @var string 请求ID */
    private ?string $requestId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(InvoiceApplyResultGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 投放账户ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 请求ID
     */
    public function requestId(string $requestId): self
    {
        $this->requestId = $requestId;
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
     * 本接口为第三步，提交开票申请成功之后，用于查询申请中的发票开具结果。发票全部开具成功，返回处理成功
     */
    public function execute(): \Oceanengine\Models\InvoiceApplyResultGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->requestId === null) {
            throw new \InvalidArgumentException('requestId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['request_id'] = $this->requestId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/invoice/apply_result/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\InvoiceApplyResultGetV30Response::class);

        return $result['model'];
    }
}
