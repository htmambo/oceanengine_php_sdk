<?php

/**
 * 本文件由 go2php 生成，源: api_remittance_code_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询汇款码
 */
class ApiOpenApiV30RemittanceCodeListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $ccAccountId = null;
    /** @var int 广告主id */
    private ?int $accountId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var string[] 汇款码列表 */
    private ?array $remittanceCodeList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(RemittanceCodeListGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ccAccountId(int $ccAccountId): self
    {
        $this->ccAccountId = $ccAccountId;
        return $this;
    }

    /**
     * 广告主id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
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

    /**
     * 汇款码列表
     */
    public function remittanceCodeList(array $remittanceCodeList): self
    {
        $this->remittanceCodeList = $remittanceCodeList;
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
     * 查询汇款码
     */
    public function execute(): \Oceanengine\Models\RemittanceCodeListGetV30Response
    {
        if ($this->ccAccountId === null) {
            throw new \InvalidArgumentException('ccAccountId is required and must be specified');
        }
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->remittanceCodeList === null) {
            throw new \InvalidArgumentException('remittanceCodeList is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['cc_account_id'] = $this->ccAccountId;
        $queryParams['account_id'] = $this->accountId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $queryParams['remittance_code_list'] = $this->remittanceCodeList;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/remittance_code/list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\RemittanceCodeListGetV30Response::class);

        return $result['model'];
    }
}
