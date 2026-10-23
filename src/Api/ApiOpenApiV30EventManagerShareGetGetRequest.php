<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_share_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 事件管理资产查看共享范围
 */
class ApiOpenApiV30EventManagerShareGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $organizationId = null;
    private ?int $assetId = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerShareGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    public function assetId(int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

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
     * 事件管理资产查看共享范围
     */
    public function execute(): \Oceanengine\Models\EventManagerShareGetV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        if ($this->assetId === null) {
            throw new \InvalidArgumentException('assetId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        $queryParams['asset_id'] = $this->assetId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/event_manager/share/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerShareGetV30Response::class);

        return $result['model'];
    }
}
