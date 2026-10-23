<?php

/**
 * 本文件由 go2php 生成，源: api_local_market_page_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取可用营销页列表
 */
class ApiOpenApiV30LocalMarketPageListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    private ?string $deliveryGoal = null;
    /** @var int[] 门店id，当delivery_goal&#x3D;POI时，有效且必填 */
    private ?array $poiIds = null;
    /** @var int[] 商品id，当delivery_goal&#x3D;PRODUCT时，有效且必填 */
    private ?array $productIds = null;
    /** @var int 页码，默认值1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值20，最大值100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalMarketPageListGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    public function deliveryGoal(string $deliveryGoal): self
    {
        $this->deliveryGoal = $deliveryGoal;
        return $this;
    }

    /**
     * 门店id，当delivery_goal&#x3D;POI时，有效且必填
     */
    public function poiIds(array $poiIds): self
    {
        $this->poiIds = $poiIds;
        return $this;
    }

    /**
     * 商品id，当delivery_goal&#x3D;PRODUCT时，有效且必填
     */
    public function productIds(array $productIds): self
    {
        $this->productIds = $productIds;
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
     * 页面大小，默认值20，最大值100
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
     * 获取可用营销页列表
     */
    public function execute(): \Oceanengine\Models\LocalMarketPageListGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->localAccountId < 1) {
            throw new \InvalidArgumentException('localAccountId must be greater than 1');
        }
        if ($this->deliveryGoal === null) {
            throw new \InvalidArgumentException('deliveryGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['delivery_goal'] = $this->deliveryGoal;
        if ($this->poiIds !== null) {
            $queryParams['poi_ids'] = $this->poiIds;
        }
        if ($this->productIds !== null) {
            $queryParams['product_ids'] = $this->productIds;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/market_page_list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalMarketPageListGetV30Response::class);

        return $result['model'];
    }
}
