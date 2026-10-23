<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bp_asset_management_share_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取资产共享范围
 */
class ApiOpenApiV30ToolsBpAssetManagementShareGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $assetType = null;
    private ?int $instanceId = null;
    private ?int $organizationId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $shareType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsBpAssetManagementShareGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function assetType(string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    public function instanceId(int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function shareType(string $shareType): self
    {
        $this->shareType = $shareType;
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
     * 获取资产共享范围
     */
    public function execute(): \Oceanengine\Models\ToolsBpAssetManagementShareGetV30Response
    {
        if ($this->assetType === null) {
            throw new \InvalidArgumentException('assetType is required and must be specified');
        }
        if ($this->instanceId === null) {
            throw new \InvalidArgumentException('instanceId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->organizationId !== null) {
            $queryParams['organization_id'] = $this->organizationId;
        }
        $queryParams['asset_type'] = $this->assetType;
        $queryParams['instance_id'] = $this->instanceId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->shareType !== null) {
            $queryParams['share_type'] = $this->shareType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/bp_asset_management/share/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsBpAssetManagementShareGetV30Response::class);

        return $result['model'];
    }
}
