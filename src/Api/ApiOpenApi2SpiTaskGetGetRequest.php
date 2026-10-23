<?php

/**
 * 本文件由 go2php 生成，源: api_spi_task_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取推送数据
 */
class ApiOpenApi2SpiTaskGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $appId = null;
    private ?int $count = null;
    private ?int $cursor = null;
    private ?string $endDate = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $serviceLabel = null;
    private ?string $startDate = null;
    private ?string $status = null;
    private ?int $subscribeId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SpiTaskGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function appId(int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function count(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
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

    public function serviceLabel(string $serviceLabel): self
    {
        $this->serviceLabel = $serviceLabel;
        return $this;
    }

    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function status(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function subscribeId(int $subscribeId): self
    {
        $this->subscribeId = $subscribeId;
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
     * 获取推送数据
     */
    public function execute(): \Oceanengine\Models\SpiTaskGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->appId !== null) {
            $queryParams['app_id'] = $this->appId;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->endDate !== null) {
            $queryParams['end_date'] = $this->endDate;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->serviceLabel !== null) {
            $queryParams['service_label'] = $this->serviceLabel;
        }
        if ($this->startDate !== null) {
            $queryParams['start_date'] = $this->startDate;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->subscribeId !== null) {
            $queryParams['subscribe_id'] = $this->subscribeId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/spi_task/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SpiTaskGetV2Response::class);

        return $result['model'];
    }
}
