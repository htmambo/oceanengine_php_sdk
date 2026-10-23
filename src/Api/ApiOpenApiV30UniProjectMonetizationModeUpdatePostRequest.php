<?php

/**
 * 本文件由 go2php 生成，源: api_uni_project_monetization_mode_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量更新项目变现模式
 */
class ApiOpenApiV30UniProjectMonetizationModeUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\UniProjectMonetizationModeUpdateV30Request $uniProjectMonetizationModeUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UniProjectMonetizationModeUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function uniProjectMonetizationModeUpdateV30Request(\Oceanengine\Models\UniProjectMonetizationModeUpdateV30Request $uniProjectMonetizationModeUpdateV30Request): self
    {
        $this->uniProjectMonetizationModeUpdateV30Request = $uniProjectMonetizationModeUpdateV30Request;
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
     * 批量更新项目变现模式
     */
    public function execute(): \Oceanengine\Models\UniProjectMonetizationModeUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->uniProjectMonetizationModeUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/uni_project/monetization_mode/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UniProjectMonetizationModeUpdateV30Response::class);

        return $result['model'];
    }
}
