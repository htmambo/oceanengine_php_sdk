<?php

/**
 * 本文件由 go2php 生成，源: api_tools_download_package_parse_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsDownloadPackageParsePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsDownloadPackageParseV2Request $toolsDownloadPackageParseV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsDownloadPackageParseV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsDownloadPackageParseV2Request(\Oceanengine\Models\ToolsDownloadPackageParseV2Request $toolsDownloadPackageParseV2Request): self
    {
        $this->toolsDownloadPackageParseV2Request = $toolsDownloadPackageParseV2Request;
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
    public function execute(): \Oceanengine\Models\ToolsDownloadPackageParseV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsDownloadPackageParseV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/download/package/parse/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsDownloadPackageParseV2Response::class);

        return $result['model'];
    }
}
