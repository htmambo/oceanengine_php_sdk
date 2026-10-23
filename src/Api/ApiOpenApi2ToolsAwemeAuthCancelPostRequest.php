<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 抖音授权关系解绑
 */
class ApiOpenApi2ToolsAwemeAuthCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAwemeAuthCancelV2Request $toolsAwemeAuthCancelV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeAuthCancelV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAwemeAuthCancelV2Request(\Oceanengine\Models\ToolsAwemeAuthCancelV2Request $toolsAwemeAuthCancelV2Request): self
    {
        $this->toolsAwemeAuthCancelV2Request = $toolsAwemeAuthCancelV2Request;
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
     * 抖音授权关系解绑
     */
    public function execute(): \Oceanengine\Models\ToolsAwemeAuthCancelV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAwemeAuthCancelV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aweme_auth/cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeAuthCancelV2Response::class);

        return $result['model'];
    }
}
