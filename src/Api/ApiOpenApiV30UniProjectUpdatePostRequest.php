<?php

/**
 * 本文件由 go2php 生成，源: api_uni_project_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑全域投放项目
 */
class ApiOpenApiV30UniProjectUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\UniProjectUpdateV30Request $uniProjectUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UniProjectUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function uniProjectUpdateV30Request(\Oceanengine\Models\UniProjectUpdateV30Request $uniProjectUpdateV30Request): self
    {
        $this->uniProjectUpdateV30Request = $uniProjectUpdateV30Request;
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
     * 编辑全域投放项目
     */
    public function execute(): \Oceanengine\Models\UniProjectUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->uniProjectUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/uni_project/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UniProjectUpdateV30Response::class);

        return $result['model'];
    }
}
