<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_track_url_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2EventManagerTrackUrlGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 资产ID */
    private ?int $assetId = null;
    /** @var string 应用下载链接 */
    private ?string $downloadUrl = null;
    /** @var string 监测链接组名称 */
    private ?string $trackUrlGroupName = null;
    /** @var int 监测链接组ID */
    private ?int $trackUrlGroupId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 分页个数 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerTrackUrlGetV2ApiService $service)
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
     * 应用下载链接
     */
    public function downloadUrl(string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 监测链接组名称
     */
    public function trackUrlGroupName(string $trackUrlGroupName): self
    {
        $this->trackUrlGroupName = $trackUrlGroupName;
        return $this;
    }

    /**
     * 监测链接组ID
     */
    public function trackUrlGroupId(int $trackUrlGroupId): self
    {
        $this->trackUrlGroupId = $trackUrlGroupId;
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
     * 分页个数
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\EventManagerTrackUrlGetV2Response
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
        if ($this->downloadUrl !== null) {
            $queryParams['download_url'] = $this->downloadUrl;
        }
        if ($this->trackUrlGroupName !== null) {
            $queryParams['track_url_group_name'] = $this->trackUrlGroupName;
        }
        if ($this->trackUrlGroupId !== null) {
            $queryParams['track_url_group_id'] = $this->trackUrlGroupId;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/event_manager/track_url/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerTrackUrlGetV2Response::class);

        return $result['model'];
    }
}
