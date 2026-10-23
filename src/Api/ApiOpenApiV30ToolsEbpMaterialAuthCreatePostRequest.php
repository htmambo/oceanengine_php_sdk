<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_material_auth_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * ebp素材共享
 */
class ApiOpenApiV30ToolsEbpMaterialAuthCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpMaterialAuthCreateV30Request $toolsEbpMaterialAuthCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpMaterialAuthCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpMaterialAuthCreateV30Request(\Oceanengine\Models\ToolsEbpMaterialAuthCreateV30Request $toolsEbpMaterialAuthCreateV30Request): self
    {
        $this->toolsEbpMaterialAuthCreateV30Request = $toolsEbpMaterialAuthCreateV30Request;
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
     * ebp素材共享
     */
    public function execute(): \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpMaterialAuthCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/material/auth/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30Response::class);

        return $result['model'];
    }
}
