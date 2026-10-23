<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_extend_package_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * APIDescription
 */
class ApiOpenApi2ToolsAppManagementExtendPackageCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2Request $toolsAppManagementExtendPackageCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementExtendPackageCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementExtendPackageCreateV2Request(\Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2Request $toolsAppManagementExtendPackageCreateV2Request): self
    {
        $this->toolsAppManagementExtendPackageCreateV2Request = $toolsAppManagementExtendPackageCreateV2Request;
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
     * APIDescription
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementExtendPackageCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/extend_package/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2Response::class);

        return $result['model'];
    }
}
