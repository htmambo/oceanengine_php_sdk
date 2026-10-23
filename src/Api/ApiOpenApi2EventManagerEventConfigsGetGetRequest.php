<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_event_configs_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口用于查询资产下已经创建的事件及其相关信息
 */
class ApiOpenApi2EventManagerEventConfigsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 资产ID */
    private ?int $assetId = null;
    /** @var string 创建时间排序方式，允许值：&#x60;DESC&#x60; 降序、&#x60;ASC&#x60; 升序。默认：&#x60;ASC&#x60; */
    private ?string $sortType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerEventConfigsGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 资产ID
     */
    public function assetId(int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 创建时间排序方式，允许值：&#x60;DESC&#x60; 降序、&#x60;ASC&#x60; 升序。默认：&#x60;ASC&#x60;
     */
    public function sortType(string $sortType): self
    {
        $this->sortType = $sortType;
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
     * 此接口用于查询资产下已经创建的事件及其相关信息
     */
    public function execute(): \Oceanengine\Models\EventManagerEventConfigsGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->assetId === null) {
            throw new \InvalidArgumentException('assetId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['asset_id'] = $this->assetId;
        if ($this->sortType !== null) {
            $queryParams['sort_type'] = $this->sortType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/event_configs/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerEventConfigsGetV2Response::class);

        return $result['model'];
    }
}
