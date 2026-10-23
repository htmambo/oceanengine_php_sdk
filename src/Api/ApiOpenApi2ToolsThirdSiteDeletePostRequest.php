<?php

/**
 * 本文件由 go2php 生成，源: api_tools_third_site_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsThirdSiteDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsThirdSiteDeleteV2Request $toolsThirdSiteDeleteV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsThirdSiteDeleteV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsThirdSiteDeleteV2Request(\Oceanengine\Models\ToolsThirdSiteDeleteV2Request $toolsThirdSiteDeleteV2Request): self
    {
        $this->toolsThirdSiteDeleteV2Request = $toolsThirdSiteDeleteV2Request;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsThirdSiteDeleteV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsThirdSiteDeleteV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/third_site/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsThirdSiteDeleteV2Response::class);

        return $result['model'];
    }
}
