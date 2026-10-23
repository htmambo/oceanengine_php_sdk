<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_extend_package_create_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 接口描述：创建应用分包【支持所有账户体系】 通过请求参数account_id 账户id（指可以接的账号体系如广告主id、bpid等）
 */
class ApiOpenApi2ToolsAppManagementExtendPackageCreateV2PostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2Request $toolsAppManagementExtendPackageCreateV2V2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementExtendPackageCreateV2V2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementExtendPackageCreateV2V2Request(\Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2Request $toolsAppManagementExtendPackageCreateV2V2Request): self
    {
        $this->toolsAppManagementExtendPackageCreateV2V2Request = $toolsAppManagementExtendPackageCreateV2V2Request;
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
     * 接口描述：创建应用分包【支持所有账户体系】 通过请求参数account_id 账户id（指可以接的账号体系如广告主id、bpid等）
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementExtendPackageCreateV2V2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/extend_package/create_v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2Response::class);

        return $result['model'];
    }
}
