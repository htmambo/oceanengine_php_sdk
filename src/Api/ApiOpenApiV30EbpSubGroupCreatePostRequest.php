<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_sub_group_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建EBP得子组织
 */
class ApiOpenApiV30EbpSubGroupCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EbpSubGroupCreateV30Request $ebpSubGroupCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpSubGroupCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ebpSubGroupCreateV30Request(\Oceanengine\Models\EbpSubGroupCreateV30Request $ebpSubGroupCreateV30Request): self
    {
        $this->ebpSubGroupCreateV30Request = $ebpSubGroupCreateV30Request;
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
     * 创建EBP得子组织
     */
    public function execute(): \Oceanengine\Models\EbpSubGroupCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ebpSubGroupCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ebp/sub_group/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpSubGroupCreateV30Response::class);

        return $result['model'];
    }
}
