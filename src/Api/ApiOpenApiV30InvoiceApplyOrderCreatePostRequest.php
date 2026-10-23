<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_apply_order_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口为开票流程第二步，拉取到可开票账单之后，填写账单开票金额，提交
 */
class ApiOpenApiV30InvoiceApplyOrderCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\InvoiceApplyOrderCreateV30Request $invoiceApplyOrderCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(InvoiceApplyOrderCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function invoiceApplyOrderCreateV30Request(\Oceanengine\Models\InvoiceApplyOrderCreateV30Request $invoiceApplyOrderCreateV30Request): self
    {
        $this->invoiceApplyOrderCreateV30Request = $invoiceApplyOrderCreateV30Request;
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
     * 本接口为开票流程第二步，拉取到可开票账单之后，填写账单开票金额，提交
     */
    public function execute(): \Oceanengine\Models\InvoiceApplyOrderCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->invoiceApplyOrderCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/invoice/apply_order/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\InvoiceApplyOrderCreateV30Response::class);

        return $result['model'];
    }
}
