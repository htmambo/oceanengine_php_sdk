<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 发起广告主和抖音号/抖音短视频的的授权绑定
 */
class ApiOpenApi2ToolsAwemeAuthPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAwemeAuthV2Request $toolsAwemeAuthV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeAuthV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAwemeAuthV2Request(\Oceanengine\Models\ToolsAwemeAuthV2Request $toolsAwemeAuthV2Request): self
    {
        $this->toolsAwemeAuthV2Request = $toolsAwemeAuthV2Request;
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
     * 发起广告主和抖音号/抖音短视频的的授权绑定
     */
    public function execute(): \Oceanengine\Models\ToolsAwemeAuthV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAwemeAuthV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aweme_auth/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeAuthV2Response::class);

        return $result['model'];
    }
}
