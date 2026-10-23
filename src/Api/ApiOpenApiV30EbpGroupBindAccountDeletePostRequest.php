<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_group_bind_account_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 解绑组织绑定的账户
 */
class ApiOpenApiV30EbpGroupBindAccountDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EbpGroupBindAccountDeleteV30Request $ebpGroupBindAccountDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpGroupBindAccountDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ebpGroupBindAccountDeleteV30Request(\Oceanengine\Models\EbpGroupBindAccountDeleteV30Request $ebpGroupBindAccountDeleteV30Request): self
    {
        $this->ebpGroupBindAccountDeleteV30Request = $ebpGroupBindAccountDeleteV30Request;
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
     * 解绑组织绑定的账户
     */
    public function execute(): \Oceanengine\Models\EbpGroupBindAccountDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ebpGroupBindAccountDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ebp/group_bind_account/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpGroupBindAccountDeleteV30Response::class);

        return $result['model'];
    }
}
