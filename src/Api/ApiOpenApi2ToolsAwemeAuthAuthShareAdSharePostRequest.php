<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_auth_share_ad_share_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 共享抖音号授权
 */
class ApiOpenApi2ToolsAwemeAuthAuthShareAdSharePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAwemeAuthAuthShareAdShareV2Request $toolsAwemeAuthAuthShareAdShareV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeAuthAuthShareAdShareV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAwemeAuthAuthShareAdShareV2Request(\Oceanengine\Models\ToolsAwemeAuthAuthShareAdShareV2Request $toolsAwemeAuthAuthShareAdShareV2Request): self
    {
        $this->toolsAwemeAuthAuthShareAdShareV2Request = $toolsAwemeAuthAuthShareAdShareV2Request;
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
     * 共享抖音号授权
     */
    public function execute(): \Oceanengine\Models\ToolsAwemeAuthAuthShareAdShareV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAwemeAuthAuthShareAdShareV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aweme_auth/auth_share/ad_share/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeAuthAuthShareAdShareV2Response::class);

        return $result['model'];
    }
}
