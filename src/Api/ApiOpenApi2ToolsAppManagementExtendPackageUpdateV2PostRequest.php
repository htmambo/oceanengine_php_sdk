<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_extend_package_update_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过账户id、账户类型和应用包id，更新全部或部分应用子包版本。
 */
class ApiOpenApi2ToolsAppManagementExtendPackageUpdateV2PostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2Request $toolsAppManagementExtendPackageUpdateV2V2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementExtendPackageUpdateV2V2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementExtendPackageUpdateV2V2Request(\Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2Request $toolsAppManagementExtendPackageUpdateV2V2Request): self
    {
        $this->toolsAppManagementExtendPackageUpdateV2V2Request = $toolsAppManagementExtendPackageUpdateV2V2Request;
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
     * 通过账户id、账户类型和应用包id，更新全部或部分应用子包版本。
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementExtendPackageUpdateV2V2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/extend_package/update_v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2Response::class);

        return $result['model'];
    }
}
