<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_bp_share_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 设置应用共享【增量共享】 通过请求参数organization_id 巨量纵横组织id、package_id应用包id和share_mode 共享类型 新增应用共享
 */
class ApiOpenApi2ToolsAppManagementBpSharePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementBpShareV2Request $toolsAppManagementBpShareV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementBpShareV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementBpShareV2Request(\Oceanengine\Models\ToolsAppManagementBpShareV2Request $toolsAppManagementBpShareV2Request): self
    {
        $this->toolsAppManagementBpShareV2Request = $toolsAppManagementBpShareV2Request;
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
     * 设置应用共享【增量共享】 通过请求参数organization_id 巨量纵横组织id、package_id应用包id和share_mode 共享类型 新增应用共享
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementBpShareV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementBpShareV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/bp_share/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementBpShareV2Response::class);

        return $result['model'];
    }
}
