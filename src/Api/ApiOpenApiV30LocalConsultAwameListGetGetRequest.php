<?php

/**
 * 本文件由 go2php 生成，源: api_local_consult_awame_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取可私信接待抖音号列表
 */
class ApiOpenApiV30LocalConsultAwameListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 本地广告主ID */
    private ?int $localAccountId = null;
    private ?string $deliveryGoal = null;
    /** @var int[] 长度[0,10000] */
    private ?array $poiIds = null;
    /** @var int[] 长度[0,10] */
    private ?array $productIds = null;
    private ?\Oceanengine\Models\LocalConsultAwameListGetV30Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalConsultAwameListGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 本地广告主ID
     */
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
     * 长度[0,10000]
     */
    public function poiIds(array $poiIds): self
    {
        $this->poiIds = $poiIds;
        return $this;
    }

    /**
     * 长度[0,10]
     */
    public function productIds(array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    public function filtering(\Oceanengine\Models\LocalConsultAwameListGetV30Filtering $filtering): self
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
     * 获取可私信接待抖音号列表
     */
    public function execute(): \Oceanengine\Models\LocalConsultAwameListGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
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
        $url = '/open_api/v3.0/local/consult_awame_list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalConsultAwameListGetV30Response::class);

        return $result['model'];
    }
}
