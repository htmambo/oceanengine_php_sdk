<?php

/**
 * 本文件由 go2php 生成，源: api_create_project_invoice_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建项目开票接口
 */
class ApiOpenApi2CreateProjectInvoicePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CreateProjectInvoiceV2Request $createProjectInvoiceV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CreateProjectInvoiceV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function createProjectInvoiceV2Request(\Oceanengine\Models\CreateProjectInvoiceV2Request $createProjectInvoiceV2Request): self
    {
        $this->createProjectInvoiceV2Request = $createProjectInvoiceV2Request;
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
     * 创建项目开票接口
     */
    public function execute(): \Oceanengine\Models\CreateProjectInvoiceV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->createProjectInvoiceV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/create/project_invoice/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CreateProjectInvoiceV2Response::class);

        return $result['model'];
    }
}
