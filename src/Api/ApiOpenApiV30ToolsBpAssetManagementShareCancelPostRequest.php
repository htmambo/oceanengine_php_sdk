<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bp_asset_management_share_cancel_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 取消资产共享
 */
class ApiOpenApiV30ToolsBpAssetManagementShareCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsBpAssetManagementShareCancelV30Request $toolsBpAssetManagementShareCancelV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsBpAssetManagementShareCancelV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsBpAssetManagementShareCancelV30Request(\Oceanengine\Models\ToolsBpAssetManagementShareCancelV30Request $toolsBpAssetManagementShareCancelV30Request): self
    {
        $this->toolsBpAssetManagementShareCancelV30Request = $toolsBpAssetManagementShareCancelV30Request;
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
     * 取消资产共享
     */
    public function execute(): \Oceanengine\Models\ToolsBpAssetManagementShareCancelV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsBpAssetManagementShareCancelV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/bp_asset_management/share/cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsBpAssetManagementShareCancelV30Response::class);

        return $result['model'];
    }
}
