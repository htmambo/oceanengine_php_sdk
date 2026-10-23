<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_account_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取前10000条工作台账户下的管理的账户列表。（仅支持类型为CUSTOMER_ADMIN或CUSTOMER_OPERATOR的账户，查询前可先通过oauth_advertiser_get获取有授权的工作台账户）。
 */
class ApiOpenApiV30CustomerCenterAccountListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 工作台账户ID，账户类型为&#x60;CUSTOMER_ADMIN&#x60;或&#x60;CUSTOMER_OPERATOR&#x60;对应账户ID 可通过获取已授权账户列表查询获取 */
    private ?int $accountId = null;
    /** @var \Oceanengine\Models\CustomerCenterAccountListV30Filter 过滤条件 */
    private ?\Oceanengine\Models\CustomerCenterAccountListV30Filter $filter = null;
    /** @var int 页码，默认值&#x60;1&#x60; */
    private ?int $page = null;
    /** @var int 页面大小，默认值&#x60;10&#x60;，取值范围[1,100] 仅支持查询前10000条数据，即page*page_size≤10000 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CustomerCenterAccountListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 工作台账户ID，账户类型为&#x60;CUSTOMER_ADMIN&#x60;或&#x60;CUSTOMER_OPERATOR&#x60;对应账户ID 可通过获取已授权账户列表查询获取
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\CustomerCenterAccountListV30Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 页码，默认值&#x60;1&#x60;
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值&#x60;10&#x60;，取值范围[1,100] 仅支持查询前10000条数据，即page*page_size≤10000
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
     * 用于获取前10000条工作台账户下的管理的账户列表。（仅支持类型为CUSTOMER_ADMIN或CUSTOMER_OPERATOR的账户，查询前可先通过oauth_advertiser_get获取有授权的工作台账户）。
     */
    public function execute(): \Oceanengine\Models\CustomerCenterAccountListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->filter === null) {
            throw new \InvalidArgumentException('filter is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/customer_center/account/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CustomerCenterAccountListV30Response::class);

        return $result['model'];
    }
}
