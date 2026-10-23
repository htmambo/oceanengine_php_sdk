<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_micro_applet_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新字节小程序
 */
class ApiOpenApiV30ToolsEbpMicroAppletUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpMicroAppletUpdateV30Request $toolsEbpMicroAppletUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpMicroAppletUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpMicroAppletUpdateV30Request(\Oceanengine\Models\ToolsEbpMicroAppletUpdateV30Request $toolsEbpMicroAppletUpdateV30Request): self
    {
        $this->toolsEbpMicroAppletUpdateV30Request = $toolsEbpMicroAppletUpdateV30Request;
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
     * 更新字节小程序
     */
    public function execute(): \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpMicroAppletUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/micro_applet/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30Response::class);

        return $result['model'];
    }
}
