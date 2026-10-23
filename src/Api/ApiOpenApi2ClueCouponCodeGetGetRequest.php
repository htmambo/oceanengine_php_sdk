<?php

/**
 * 本文件由 go2php 生成，源: api_clue_coupon_code_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ClueCouponCodeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $activityId = null;
    private ?int $advertiserId = null;
    private ?int $couponId = null;
    private ?string $endTime = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?int $resourceId = null;
    private ?string $startTime = null;
    private ?string $status = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueCouponCodeGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function activityId(int $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function couponId(int $couponId): self
    {
        $this->couponId = $couponId;
        return $this;
    }

    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
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

    public function resourceId(int $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function status(string $status): self
    {
        $this->status = $status;
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
    public function execute(): \Oceanengine\Models\ClueCouponCodeGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->activityId !== null) {
            $queryParams['activity_id'] = $this->activityId;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->couponId !== null) {
            $queryParams['coupon_id'] = $this->couponId;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->resourceId !== null) {
            $queryParams['resource_id'] = $this->resourceId;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/coupon/code/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueCouponCodeGetV2Response::class);

        return $result['model'];
    }
}
