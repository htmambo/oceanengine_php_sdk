<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_subject_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取团队关联认证的主体列表
 */
class ApiOpenApiV30ToolsEbpSubjectListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $enterpriseOrganizationId = null;
    /** @var string[] 主体类型 */
    private ?array $queryTypes = null;
    /** @var \Oceanengine\Models\ToolsEbpSubjectListV30Pagination 每页最多50条 */
    private ?\Oceanengine\Models\ToolsEbpSubjectListV30Pagination $pagination = null;
    /** @var int[] companyId过滤 */
    private ?array $filterCompanyId = null;
    /** @var string[] 状态过滤 */
    private ?array $filterStatus = null;
    /** @var int[] 关联主体id过滤 */
    private ?array $filterAccountIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpSubjectListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function enterpriseOrganizationId(int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * 主体类型
     */
    public function queryTypes(array $queryTypes): self
    {
        $this->queryTypes = $queryTypes;
        return $this;
    }

    /**
     * 每页最多50条
     */
    public function pagination(\Oceanengine\Models\ToolsEbpSubjectListV30Pagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * companyId过滤
     */
    public function filterCompanyId(array $filterCompanyId): self
    {
        $this->filterCompanyId = $filterCompanyId;
        return $this;
    }

    /**
     * 状态过滤
     */
    public function filterStatus(array $filterStatus): self
    {
        $this->filterStatus = $filterStatus;
        return $this;
    }

    /**
     * 关联主体id过滤
     */
    public function filterAccountIds(array $filterAccountIds): self
    {
        $this->filterAccountIds = $filterAccountIds;
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
     * 获取团队关联认证的主体列表
     */
    public function execute(): \Oceanengine\Models\ToolsEbpSubjectListV30Response
    {
        if ($this->enterpriseOrganizationId === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationId is required and must be specified');
        }
        if ($this->queryTypes === null) {
            throw new \InvalidArgumentException('queryTypes is required and must be specified');
        }
        if ($this->pagination === null) {
            throw new \InvalidArgumentException('pagination is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        $queryParams['query_types'] = $this->queryTypes;
        if ($this->filterCompanyId !== null) {
            $queryParams['filter_company_id'] = $this->filterCompanyId;
        }
        if ($this->filterStatus !== null) {
            $queryParams['filter_status'] = $this->filterStatus;
        }
        if ($this->filterAccountIds !== null) {
            $queryParams['filter_account_ids'] = $this->filterAccountIds;
        }
        $__encoded0 = json_encode($this->pagination);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: pagination');
            }
            $queryParams['pagination'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/subject/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpSubjectListV30Response::class);

        return $result['model'];
    }
}
