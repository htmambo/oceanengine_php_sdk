<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_group_bind_account_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 工作台组织绑定账户，支持通过主体、客户ID方式绑定
 */
class ApiOpenApiV30EbpGroupBindAccountCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EbpGroupBindAccountCreateV30Request $ebpGroupBindAccountCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpGroupBindAccountCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ebpGroupBindAccountCreateV30Request(\Oceanengine\Models\EbpGroupBindAccountCreateV30Request $ebpGroupBindAccountCreateV30Request): self
    {
        $this->ebpGroupBindAccountCreateV30Request = $ebpGroupBindAccountCreateV30Request;
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
     * 工作台组织绑定账户，支持通过主体、客户ID方式绑定
     */
    public function execute(): \Oceanengine\Models\EbpGroupBindAccountCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ebpGroupBindAccountCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ebp/group_bind_account/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpGroupBindAccountCreateV30Response::class);

        return $result['model'];
    }
}
