<?php

/**
 * 本文件由 go2php 生成，源: api_clue_coupon_employee_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ClueCouponEmployeeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueCouponEmployeeGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ClueCouponEmployeeGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/coupon/employee/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueCouponEmployeeGetV2Response::class);

        return $result['model'];
    }
}
