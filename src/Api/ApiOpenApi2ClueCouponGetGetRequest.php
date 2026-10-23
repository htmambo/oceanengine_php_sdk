<?php

/**
 * 本文件由 go2php 生成，源: api_clue_coupon_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ClueCouponGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $activityIds = null;
    private ?array $activityTypes = null;
    private ?int $advertiserId = null;
    private ?string $endTime = null;
    private ?string $isDel = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $startTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueCouponGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function activityIds(array $activityIds): self
    {
        $this->activityIds = $activityIds;
        return $this;
    }

    public function activityTypes(array $activityTypes): self
    {
        $this->activityTypes = $activityTypes;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function isDel(string $isDel): self
    {
        $this->isDel = $isDel;
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

    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
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
    public function execute(): \Oceanengine\Models\ClueCouponGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->activityIds !== null) {
            $queryParams['activity_ids'] = $this->activityIds;
        }
        if ($this->activityTypes !== null) {
            $queryParams['activity_types'] = $this->activityTypes;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->isDel !== null) {
            $queryParams['is_del'] = $this->isDel;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/coupon/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueCouponGetV2Response::class);

        return $result['model'];
    }
}
