<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_order_user_distribution_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2StarReportOrderUserDistributionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $fanType = null;
    private ?string $interactiveType = null;
    private ?int $orderId = null;
    private ?int $starId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarReportOrderUserDistributionGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fanType(string $fanType): self
    {
        $this->fanType = $fanType;
        return $this;
    }

    public function interactiveType(string $interactiveType): self
    {
        $this->interactiveType = $interactiveType;
        return $this;
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
    public function execute(): \Oceanengine\Models\StarReportOrderUserDistributionGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->fanType !== null) {
            $queryParams['fan_type'] = $this->fanType;
        }
        if ($this->interactiveType !== null) {
            $queryParams['interactive_type'] = $this->interactiveType;
        }
        if ($this->orderId !== null) {
            $queryParams['order_id'] = $this->orderId;
        }
        if ($this->starId !== null) {
            $queryParams['star_id'] = $this->starId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/report/order_user_distribution/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarReportOrderUserDistributionGetV2Response::class);

        return $result['model'];
    }
}
