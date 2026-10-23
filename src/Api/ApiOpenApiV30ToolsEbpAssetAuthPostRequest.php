<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_asset_auth_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资产添加授权
 */
class ApiOpenApiV30ToolsEbpAssetAuthPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpAssetAuthV30Request $toolsEbpAssetAuthV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpAssetAuthV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpAssetAuthV30Request(\Oceanengine\Models\ToolsEbpAssetAuthV30Request $toolsEbpAssetAuthV30Request): self
    {
        $this->toolsEbpAssetAuthV30Request = $toolsEbpAssetAuthV30Request;
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
     * 资产添加授权
     */
    public function execute(): \Oceanengine\Models\ToolsEbpAssetAuthV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpAssetAuthV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/asset/auth/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpAssetAuthV30Response::class);

        return $result['model'];
    }
}
