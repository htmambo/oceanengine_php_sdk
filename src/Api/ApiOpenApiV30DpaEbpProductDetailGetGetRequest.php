<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP获取通用版商品详情
 */
class ApiOpenApiV30DpaEbpProductDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户id */
    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?int $platformId = null;
    /** @var \Oceanengine\Models\DpaEbpProductDetailGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\DpaEbpProductDetailGetV30Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpProductDetailGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function platformId(int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\DpaEbpProductDetailGetV30Filtering $filtering): self
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
     * EBP获取通用版商品详情
     */
    public function execute(): \Oceanengine\Models\DpaEbpProductDetailGetV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->accountId !== null) {
            $queryParams['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $queryParams['account_type'] = $this->accountType;
        }
        if ($this->platformId !== null) {
            $queryParams['platform_id'] = $this->platformId;
        }
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
        $url = '/open_api/v3.0/dpa/ebp/product/detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpProductDetailGetV30Response::class);

        return $result['model'];
    }
}
