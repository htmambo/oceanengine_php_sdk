<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_android_basic_package_publish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 发布安卓应用母包「支持所有账户体系】 可通过请求参数account_id 账户id（指可以接的账号体系如广告主id、巨量纵横组织id等）和account_type 账户类型，发布审核通过的安卓应用母包。
 */
class ApiOpenApi2ToolsAppManagementAndroidBasicPackagePublishPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementAndroidBasicPackagePublishV2Request $toolsAppManagementAndroidBasicPackagePublishV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementAndroidBasicPackagePublishV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementAndroidBasicPackagePublishV2Request(\Oceanengine\Models\ToolsAppManagementAndroidBasicPackagePublishV2Request $toolsAppManagementAndroidBasicPackagePublishV2Request): self
    {
        $this->toolsAppManagementAndroidBasicPackagePublishV2Request = $toolsAppManagementAndroidBasicPackagePublishV2Request;
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
     * 发布安卓应用母包「支持所有账户体系】 可通过请求参数account_id 账户id（指可以接的账号体系如广告主id、巨量纵横组织id等）和account_type 账户类型，发布审核通过的安卓应用母包。
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementAndroidBasicPackagePublishV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementAndroidBasicPackagePublishV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/android_basic_package/publish/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementAndroidBasicPackagePublishV2Response::class);

        return $result['model'];
    }
}
