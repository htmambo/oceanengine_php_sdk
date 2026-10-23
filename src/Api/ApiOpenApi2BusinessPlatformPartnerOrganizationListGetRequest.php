<?php

/**
 * 本文件由 go2php 生成，源: api_business_platform_partner_organization_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2BusinessPlatformPartnerOrganizationListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 巨量纵横组织id */
    private ?int $organizationId = null;
    /** @var int 页码，默认值为1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值为10，最大不超过200 */
    private ?int $pageSize = null;
    /** @var \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2Filtering 过滤条件 */
    private ?\Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BusinessPlatformPartnerOrganizationListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 巨量纵横组织id
     */
    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * 页码，默认值为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值为10，最大不超过200
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/business_platform/partner_organization/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2Response::class);

        return $result['model'];
    }
}
