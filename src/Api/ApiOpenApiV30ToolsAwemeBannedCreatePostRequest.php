<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_banned_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * PM2
 */
class ApiOpenApiV30ToolsAwemeBannedCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAwemeBannedCreateV30Request $toolsAwemeBannedCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeBannedCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAwemeBannedCreateV30Request(\Oceanengine\Models\ToolsAwemeBannedCreateV30Request $toolsAwemeBannedCreateV30Request): self
    {
        $this->toolsAwemeBannedCreateV30Request = $toolsAwemeBannedCreateV30Request;
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
     * PM2
     */
    public function execute(): \Oceanengine\Models\ToolsAwemeBannedCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAwemeBannedCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/aweme_banned/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeBannedCreateV30Response::class);

        return $result['model'];
    }
}
