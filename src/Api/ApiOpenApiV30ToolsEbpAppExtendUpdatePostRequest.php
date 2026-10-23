<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_extend_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新安卓应用分包版本
 */
class ApiOpenApiV30ToolsEbpAppExtendUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpAppExtendUpdateV30Request $toolsEbpAppExtendUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpAppExtendUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpAppExtendUpdateV30Request(\Oceanengine\Models\ToolsEbpAppExtendUpdateV30Request $toolsEbpAppExtendUpdateV30Request): self
    {
        $this->toolsEbpAppExtendUpdateV30Request = $toolsEbpAppExtendUpdateV30Request;
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
     * 更新安卓应用分包版本
     */
    public function execute(): \Oceanengine\Models\ToolsEbpAppExtendUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpAppExtendUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/app_extend/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpAppExtendUpdateV30Response::class);

        return $result['model'];
    }
}
