<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_role_permission_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询当前 OAuth 用户在指定 EBP 组织下的角色及其可访问的开放平台接口权限范围。
 */
class ApiOpenApi2EbpRolePermissionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 要查询的升级版巨量引擎工作台组织 ID 列表，单次最多 10 个 */
    private ?array $enterpriseOrganizationIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpRolePermissionGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 要查询的升级版巨量引擎工作台组织 ID 列表，单次最多 10 个
     */
    public function enterpriseOrganizationIds(array $enterpriseOrganizationIds): self
    {
        $this->enterpriseOrganizationIds = $enterpriseOrganizationIds;
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
     * 查询当前 OAuth 用户在指定 EBP 组织下的角色及其可访问的开放平台接口权限范围。
     */
    public function execute(): \Oceanengine\Models\EbpRolePermissionGetV2Response
    {
        if ($this->enterpriseOrganizationIds === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationIds is required and must be specified');
        }
        if (count($this->enterpriseOrganizationIds) < 1) {
            throw new \InvalidArgumentException('enterpriseOrganizationIds must have at least 1 elements');
        }
        if (count($this->enterpriseOrganizationIds) > 10) {
            throw new \InvalidArgumentException('enterpriseOrganizationIds must have less than 10 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_ids'] = $this->enterpriseOrganizationIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ebp/role_permission/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpRolePermissionGetV2Response::class);

        return $result['model'];
    }
}
