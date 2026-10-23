<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_download_url_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 基于发票申请单，查询开具的发票下载链接（一笔开票申请单会开具多张发票）
 */
class ApiOpenApiV30InvoiceDownloadUrlListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 投放账户ID */
    private ?int $accountId = null;
    /** @var string[] 开票申请单编号列表；最多传100个 */
    private ?array $invoiceApplySerials = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(InvoiceDownloadUrlListV30ApiService $service)
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
     * 开票申请单编号列表；最多传100个
     */
    public function invoiceApplySerials(array $invoiceApplySerials): self
    {
        $this->invoiceApplySerials = $invoiceApplySerials;
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
     * 基于发票申请单，查询开具的发票下载链接（一笔开票申请单会开具多张发票）
     */
    public function execute(): \Oceanengine\Models\InvoiceDownloadUrlListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->invoiceApplySerials === null) {
            throw new \InvalidArgumentException('invoiceApplySerials is required and must be specified');
        }
        if (count($this->invoiceApplySerials) < 1) {
            throw new \InvalidArgumentException('invoiceApplySerials must have at least 1 elements');
        }
        if (count($this->invoiceApplySerials) > 100) {
            throw new \InvalidArgumentException('invoiceApplySerials must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['invoice_apply_serials'] = $this->invoiceApplySerials;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/invoice/download_url/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\InvoiceDownloadUrlListV30Response::class);

        return $result['model'];
    }
}
