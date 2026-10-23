<?php

/**
 * 本文件由 go2php 生成，源: api_star_clue_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星图订单投后线索
 */
class ApiOpenApi2StarClueGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    /** @var int 任务id */
    private ?int $demandId = null;
    /** @var int 订单id */
    private ?int $orderId = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarClueGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 任务id
     */
    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 订单id
     */
    public function orderId(int $orderId): self
    {
        $this->orderId = $orderId;
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
     * 获取星图订单投后线索
     */
    public function execute(): \Oceanengine\Models\StarClueGetV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->demandId !== null) {
            $queryParams['demand_id'] = $this->demandId;
        }
        if ($this->orderId !== null) {
            $queryParams['order_id'] = $this->orderId;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/clue/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarClueGetV2Response::class);

        return $result['model'];
    }
}
