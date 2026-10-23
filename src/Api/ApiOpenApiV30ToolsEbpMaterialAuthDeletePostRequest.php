<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_material_auth_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 取消EBP素材共享
 */
class ApiOpenApiV30ToolsEbpMaterialAuthDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpMaterialAuthDeleteV30Request $toolsEbpMaterialAuthDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpMaterialAuthDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpMaterialAuthDeleteV30Request(\Oceanengine\Models\ToolsEbpMaterialAuthDeleteV30Request $toolsEbpMaterialAuthDeleteV30Request): self
    {
        $this->toolsEbpMaterialAuthDeleteV30Request = $toolsEbpMaterialAuthDeleteV30Request;
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
     * 取消EBP素材共享
     */
    public function execute(): \Oceanengine\Models\ToolsEbpMaterialAuthDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpMaterialAuthDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/material/auth/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpMaterialAuthDeleteV30Response::class);

        return $result['model'];
    }
}
