<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_update_authorization_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 增加和删除ad应用资产的共享关系
 */
class ApiOpenApi2ToolsAppManagementUpdateAuthorizationPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementUpdateAuthorizationV2Request $toolsAppManagementUpdateAuthorizationV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementUpdateAuthorizationV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementUpdateAuthorizationV2Request(\Oceanengine\Models\ToolsAppManagementUpdateAuthorizationV2Request $toolsAppManagementUpdateAuthorizationV2Request): self
    {
        $this->toolsAppManagementUpdateAuthorizationV2Request = $toolsAppManagementUpdateAuthorizationV2Request;
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
     * 增加和删除ad应用资产的共享关系
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementUpdateAuthorizationV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementUpdateAuthorizationV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/update/authorization/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementUpdateAuthorizationV2Response::class);

        return $result['model'];
    }
}
