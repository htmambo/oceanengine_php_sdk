<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新安卓应用母包
 */
class ApiOpenApiV30ToolsEbpAppUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpAppUpdateV30Request $toolsEbpAppUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpAppUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpAppUpdateV30Request(\Oceanengine\Models\ToolsEbpAppUpdateV30Request $toolsEbpAppUpdateV30Request): self
    {
        $this->toolsEbpAppUpdateV30Request = $toolsEbpAppUpdateV30Request;
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
     * 更新安卓应用母包
     */
    public function execute(): \Oceanengine\Models\ToolsEbpAppUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpAppUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/app/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpAppUpdateV30Response::class);

        return $result['model'];
    }
}
