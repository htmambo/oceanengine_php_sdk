<?php

/**
 * 本文件由 go2php 生成，源: api_create_statement_invoice_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建结算单开票接口，支持差额开票
 */
class ApiOpenApi2CreateStatementInvoicePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CreateStatementInvoiceV2Request $createStatementInvoiceV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CreateStatementInvoiceV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function createStatementInvoiceV2Request(\Oceanengine\Models\CreateStatementInvoiceV2Request $createStatementInvoiceV2Request): self
    {
        $this->createStatementInvoiceV2Request = $createStatementInvoiceV2Request;
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
     * 创建结算单开票接口，支持差额开票
     */
    public function execute(): \Oceanengine\Models\CreateStatementInvoiceV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->createStatementInvoiceV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/create/statement_invoice/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CreateStatementInvoiceV2Response::class);

        return $result['model'];
    }
}
