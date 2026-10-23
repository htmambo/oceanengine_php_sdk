<?php

/**
 * 本文件由 go2php 生成，源: api_local_poi_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取门店列表
 */
class ApiOpenApiV30LocalPoiGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $localAccountId = null;
    /** @var string 项目设置的推广目的，根据推广目的筛选可投门店列表 */
    private ?string $localDeliveryScene = null;
    /** @var \Oceanengine\Models\LocalPoiGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\LocalPoiGetV30Filtering $filtering = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalPoiGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 项目设置的推广目的，根据推广目的筛选可投门店列表
     */
    public function localDeliveryScene(string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\LocalPoiGetV30Filtering $filtering): self
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
     * 获取门店列表
     */
    public function execute(): \Oceanengine\Models\LocalPoiGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->localDeliveryScene === null) {
            throw new \InvalidArgumentException('localDeliveryScene is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['local_delivery_scene'] = $this->localDeliveryScene;
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
        $url = '/open_api/v3.0/local/poi/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalPoiGetV30Response::class);

        return $result['model'];
    }
}
