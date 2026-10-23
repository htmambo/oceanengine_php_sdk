<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询DOU+订单属性
 */
class ApiOpenApiV30DouplusOrderListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $awemeSecUid = null;
    private ?\Oceanengine\Models\DouplusOrderListV30Filter $filter = null;
    private ?int $pageSize = null;
    private ?int $page = null;
    /** @var string 排序字段 */
    private ?string $orderByField = null;
    private ?string $orderByType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusOrderListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function awemeSecUid(string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    public function filter(\Oceanengine\Models\DouplusOrderListV30Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderByField(string $orderByField): self
    {
        $this->orderByField = $orderByField;
        return $this;
    }

    public function orderByType(string $orderByType): self
    {
        $this->orderByType = $orderByType;
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
     * 查询DOU+订单属性
     */
    public function execute(): \Oceanengine\Models\DouplusOrderListV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->awemeSecUid !== null) {
            $queryParams['aweme_sec_uid'] = $this->awemeSecUid;
        }
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->orderByField !== null) {
            $queryParams['order_by_field'] = $this->orderByField;
        }
        if ($this->orderByType !== null) {
            $queryParams['order_by_type'] = $this->orderByType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/order/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusOrderListV30Response::class);

        return $result['model'];
    }
}
