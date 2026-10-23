<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_android_basic_package_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建安卓应用母包「支持所有账户体系】
 */
class ApiOpenApi2ToolsAppManagementAndroidBasicPackageUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2Request $toolsAppManagementAndroidBasicPackageUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementAndroidBasicPackageUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementAndroidBasicPackageUpdateV2Request(\Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2Request $toolsAppManagementAndroidBasicPackageUpdateV2Request): self
    {
        $this->toolsAppManagementAndroidBasicPackageUpdateV2Request = $toolsAppManagementAndroidBasicPackageUpdateV2Request;
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
     * 创建安卓应用母包「支持所有账户体系】
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementAndroidBasicPackageUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/android_basic_package/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementAndroidBasicPackageUpdateV2Response::class);

        return $result['model'];
    }
}
