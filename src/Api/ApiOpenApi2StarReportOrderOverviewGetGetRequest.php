<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_order_overview_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2StarReportOrderOverviewGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $orderId = null;
    private ?int $starId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarReportOrderOverviewGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function orderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
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
    public function execute(): \Oceanengine\Models\StarReportOrderOverviewGetV2Response
    {
        if ($this->orderId === null) {
            throw new \InvalidArgumentException('orderId is required and must be specified');
        }
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['order_id'] = $this->orderId;
        $queryParams['star_id'] = $this->starId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/report/order_overview/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarReportOrderOverviewGetV2Response::class);

        return $result['model'];
    }
}
