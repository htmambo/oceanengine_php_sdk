<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 实时拉取EBP下账户列表
 */
class ApiOpenApi2EbpAdvertiserListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $enterpriseOrganizationId = null;
    private ?string $accountSource = null;
    /** @var \Oceanengine\Models\EbpAdvertiserListV2Filtering 过滤器 */
    private ?\Oceanengine\Models\EbpAdvertiserListV2Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpAdvertiserListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function enterpriseOrganizationId(int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    public function accountSource(string $accountSource): self
    {
        $this->accountSource = $accountSource;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\EbpAdvertiserListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 实时拉取EBP下账户列表
     */
    public function execute(): \Oceanengine\Models\EbpAdvertiserListV2Response
    {
        if ($this->enterpriseOrganizationId === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationId is required and must be specified');
        }
        if ($this->accountSource === null) {
            throw new \InvalidArgumentException('accountSource is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        $queryParams['account_source'] = $this->accountSource;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ebp/advertiser/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpAdvertiserListV2Response::class);

        return $result['model'];
    }
}
