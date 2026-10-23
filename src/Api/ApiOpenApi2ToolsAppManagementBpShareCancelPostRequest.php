<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_bp_share_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 取消应用共享 通过请求参数organization_id 巨量纵横组织id、package_id应用包id和share_mode 共享类型 取消应用共享。
 */
class ApiOpenApi2ToolsAppManagementBpShareCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2Request $toolsAppManagementBpShareCancelV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementBpShareCancelV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementBpShareCancelV2Request(\Oceanengine\Models\ToolsAppManagementBpShareCancelV2Request $toolsAppManagementBpShareCancelV2Request): self
    {
        $this->toolsAppManagementBpShareCancelV2Request = $toolsAppManagementBpShareCancelV2Request;
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
     * 取消应用共享 通过请求参数organization_id 巨量纵横组织id、package_id应用包id和share_mode 共享类型 取消应用共享。
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementBpShareCancelV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementBpShareCancelV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/bp_share/cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementBpShareCancelV2Response::class);

        return $result['model'];
    }
}
