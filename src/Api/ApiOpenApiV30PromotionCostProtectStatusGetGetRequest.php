<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_cost_protect_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 巨量2.0成本保障标查询接口
 */
class ApiOpenApiV30PromotionCostProtectStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int[] 广告id */
    private ?array $promotionIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionCostProtectStatusGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告id
     */
    public function promotionIds(array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
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
     * 巨量2.0成本保障标查询接口
     */
    public function execute(): \Oceanengine\Models\PromotionCostProtectStatusGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->promotionIds === null) {
            throw new \InvalidArgumentException('promotionIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['promotion_ids'] = $this->promotionIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/cost_protect_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionCostProtectStatusGetV30Response::class);

        return $result['model'];
    }
}
