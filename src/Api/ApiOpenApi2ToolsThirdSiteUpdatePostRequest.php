<?php

/**
 * 本文件由 go2php 生成，源: api_tools_third_site_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsThirdSiteUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsThirdSiteUpdateV2Request $toolsThirdSiteUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsThirdSiteUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsThirdSiteUpdateV2Request(\Oceanengine\Models\ToolsThirdSiteUpdateV2Request $toolsThirdSiteUpdateV2Request): self
    {
        $this->toolsThirdSiteUpdateV2Request = $toolsThirdSiteUpdateV2Request;
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
    public function execute(): \Oceanengine\Models\ToolsThirdSiteUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsThirdSiteUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/third_site/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsThirdSiteUpdateV2Response::class);

        return $result['model'];
    }
}
