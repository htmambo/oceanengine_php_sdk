<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bp_asset_management_share_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通用接口，目前支持小游戏、小程序资产
 */
class ApiOpenApiV30ToolsBpAssetManagementSharePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsBpAssetManagementShareV30Request $toolsBpAssetManagementShareV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsBpAssetManagementShareV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsBpAssetManagementShareV30Request(\Oceanengine\Models\ToolsBpAssetManagementShareV30Request $toolsBpAssetManagementShareV30Request): self
    {
        $this->toolsBpAssetManagementShareV30Request = $toolsBpAssetManagementShareV30Request;
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
     * 通用接口，目前支持小游戏、小程序资产
     */
    public function execute(): \Oceanengine\Models\ToolsBpAssetManagementShareV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsBpAssetManagementShareV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/bp_asset_management/share/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsBpAssetManagementShareV30Response::class);

        return $result['model'];
    }
}
