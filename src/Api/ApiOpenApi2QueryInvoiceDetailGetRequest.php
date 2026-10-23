<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过开票单ID/编号查询开票详情数据
 */
class ApiOpenApi2QueryInvoiceDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $agentIds = null;
    private ?string $invoiceSerial = null;
    private ?int $invoiceId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryInvoiceDetailV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentIds(array $agentIds): self
    {
        $this->agentIds = $agentIds;
        return $this;
    }

    public function invoiceSerial(string $invoiceSerial): self
    {
        $this->invoiceSerial = $invoiceSerial;
        return $this;
    }

    public function invoiceId(int $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
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
     * 通过开票单ID/编号查询开票详情数据
     */
    public function execute(): \Oceanengine\Models\QueryInvoiceDetailV2Response
    {
        if ($this->agentIds === null) {
            throw new \InvalidArgumentException('agentIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_ids'] = $this->agentIds;
        if ($this->invoiceSerial !== null) {
            $queryParams['invoice_serial'] = $this->invoiceSerial;
        }
        if ($this->invoiceId !== null) {
            $queryParams['invoice_id'] = $this->invoiceId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/invoice_detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryInvoiceDetailV2Response::class);

        return $result['model'];
    }
}
