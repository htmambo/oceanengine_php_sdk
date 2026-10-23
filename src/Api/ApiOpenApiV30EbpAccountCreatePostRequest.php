<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_account_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 工作台组织下创建账户
 */
class ApiOpenApiV30EbpAccountCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EbpAccountCreateV30Request $ebpAccountCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpAccountCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ebpAccountCreateV30Request(\Oceanengine\Models\EbpAccountCreateV30Request $ebpAccountCreateV30Request): self
    {
        $this->ebpAccountCreateV30Request = $ebpAccountCreateV30Request;
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
     * 工作台组织下创建账户
     */
    public function execute(): \Oceanengine\Models\EbpAccountCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ebpAccountCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ebp/account/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpAccountCreateV30Response::class);

        return $result['model'];
    }
}
