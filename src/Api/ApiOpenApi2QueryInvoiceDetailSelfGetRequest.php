<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_detail_self_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过开票单ID/编号查询开票详情数据
 */
class ApiOpenApi2QueryInvoiceDetailSelfGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 开票单编号 */
    private ?string $invoiceSerial = null;
    /** @var int 开票单ID */
    private ?int $invoiceId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryInvoiceDetailSelfV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 开票单编号
     */
    public function invoiceSerial(string $invoiceSerial): self
    {
        $this->invoiceSerial = $invoiceSerial;
        return $this;
    }

    /**
     * 开票单ID
     */
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
    public function execute(): \Oceanengine\Models\QueryInvoiceDetailSelfV2Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->invoiceSerial !== null) {
            $queryParams['invoice_serial'] = $this->invoiceSerial;
        }
        if ($this->invoiceId !== null) {
            $queryParams['invoice_id'] = $this->invoiceId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/invoice_detail/self/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryInvoiceDetailSelfV2Response::class);

        return $result['model'];
    }
}
