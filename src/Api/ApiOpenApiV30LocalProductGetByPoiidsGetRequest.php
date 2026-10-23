<?php

/**
 * 本文件由 go2php 生成，源: api_local_product_get_by_poiids_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据门店ID拉取商品
 */
class ApiOpenApiV30LocalProductGetByPoiidsGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    private ?array $poiIds = null;
    private ?string $localDeliveryScene = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalProductGetByPoiidsV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    public function poiIds(array $poiIds): self
    {
        $this->poiIds = $poiIds;
        return $this;
    }

    public function localDeliveryScene(string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
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
     * 根据门店ID拉取商品
     */
    public function execute(): \Oceanengine\Models\LocalProductGetByPoiidsV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->poiIds === null) {
            throw new \InvalidArgumentException('poiIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['poi_ids'] = $this->poiIds;
        if ($this->localDeliveryScene !== null) {
            $queryParams['local_delivery_scene'] = $this->localDeliveryScene;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/product/get_by_poiids/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalProductGetByPoiidsV30Response::class);

        return $result['model'];
    }
}
