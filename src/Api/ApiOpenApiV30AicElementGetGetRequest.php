<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口获取，输入账户ID、文件路径、元素类型等，查看原料
 */
class ApiOpenApiV30AicElementGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int BP账户体系:组织id，Agent账户体系:代理商id */
    private ?int $accountId = null;
    /** @var string 账户体系枚举 */
    private ?string $accountType = null;
    /** @var \Oceanengine\Models\AicElementGetV30Filtering 过滤条件 不同条件之间为「且」的关系，只有同时满足传入的多个条件，才会返回信息 */
    private ?\Oceanengine\Models\AicElementGetV30Filtering $filtering = null;
    /** @var int 页码，默认值1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值20，最大值200 */
    private ?int $pageSize = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicElementGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户体系枚举
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 过滤条件 不同条件之间为「且」的关系，只有同时满足传入的多个条件，才会返回信息
     */
    public function filtering(\Oceanengine\Models\AicElementGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码，默认值1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值20，最大值200
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
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
     * 通过此接口获取，输入账户ID、文件路径、元素类型等，查看原料
     */
    public function execute(): \Oceanengine\Models\AicElementGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
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
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/element/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicElementGetV30Response::class);

        return $result['model'];
    }
}
