<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_electronic_url_self_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 自助开票-获取数电发票链接接口
 */
class ApiOpenApi2QueryInvoiceElectronicUrlSelfGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 开票单编号 */
    private ?string $invoiceSerial = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryInvoiceElectronicUrlSelfV2ApiService $service)
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
     * 自助开票-获取数电发票链接接口
     */
    public function execute(): \Oceanengine\Models\QueryInvoiceElectronicUrlSelfV2Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->invoiceSerial === null) {
            throw new \InvalidArgumentException('invoiceSerial is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['invoice_serial'] = $this->invoiceSerial;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/invoice_electronic_url/self/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryInvoiceElectronicUrlSelfV2Response::class);

        return $result['model'];
    }
}
