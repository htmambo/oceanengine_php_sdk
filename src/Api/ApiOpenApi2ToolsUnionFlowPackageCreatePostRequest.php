<?php

/**
 * 本文件由 go2php 生成，源: api_tools_union_flow_package_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsUnionFlowPackageCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsUnionFlowPackageCreateV2Request $toolsUnionFlowPackageCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsUnionFlowPackageCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsUnionFlowPackageCreateV2Request(\Oceanengine\Models\ToolsUnionFlowPackageCreateV2Request $toolsUnionFlowPackageCreateV2Request): self
    {
        $this->toolsUnionFlowPackageCreateV2Request = $toolsUnionFlowPackageCreateV2Request;
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
    public function execute(): \Oceanengine\Models\ToolsUnionFlowPackageCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsUnionFlowPackageCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/union/flow_package/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsUnionFlowPackageCreateV2Response::class);

        return $result['model'];
    }
}
