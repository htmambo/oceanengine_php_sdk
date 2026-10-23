<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_all_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取升级版巨量引擎工作台下全量账户
 */
class ApiOpenApiV30EbpAdvertiserAllListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int EBP组织ID */
    private ?int $enterpriseOrganizationId = null;
    /** @var string 查询的账户类型 */
    private ?string $accountType = null;
    /** @var string 默认为查节点直连绑定账户 */
    private ?string $queryType = null;
    /** @var bool 是否只查活跃账户 */
    private ?bool $isActive = null;
    /** @var string 游标信息，每次返回一批数据，想继续查后批次数据，需要将上批次返回结果里cusor做为入参继续查询。 */
    private ?string $cursor = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpAdvertiserAllListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * EBP组织ID
     */
    public function enterpriseOrganizationId(int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * 查询的账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 默认为查节点直连绑定账户
     */
    public function queryType(string $queryType): self
    {
        $this->queryType = $queryType;
        return $this;
    }

    /**
     * 是否只查活跃账户
     */
    public function isActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * 游标信息，每次返回一批数据，想继续查后批次数据，需要将上批次返回结果里cusor做为入参继续查询。
     */
    public function cursor(string $cursor): self
    {
        $this->cursor = $cursor;
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
     * 获取升级版巨量引擎工作台下全量账户
     */
    public function execute(): \Oceanengine\Models\EbpAdvertiserAllListV30Response
    {
        if ($this->enterpriseOrganizationId === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        $queryParams['account_type'] = $this->accountType;
        if ($this->queryType !== null) {
            $queryParams['query_type'] = $this->queryType;
        }
        if ($this->isActive !== null) {
            $queryParams['is_active'] = $this->isActive;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ebp/advertiser_all/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpAdvertiserAllListV30Response::class);

        return $result['model'];
    }
}
