<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_order_overview_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投后数据
 */
class ApiOpenApi2StarReportOrderOverviewGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户id */
    private ?int $starId = null;
    /** @var int[] 订单id列表 */
    private ?array $orderIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarReportOrderOverviewV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户id
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 订单id列表
     */
    public function orderIds(array $orderIds): self
    {
        $this->orderIds = $orderIds;
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
     * 投后数据
     */
    public function execute(): \Oceanengine\Models\StarReportOrderOverviewV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->orderIds === null) {
            throw new \InvalidArgumentException('orderIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['order_ids'] = $this->orderIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/report/order_overview/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarReportOrderOverviewV2Response::class);

        return $result['model'];
    }
}
