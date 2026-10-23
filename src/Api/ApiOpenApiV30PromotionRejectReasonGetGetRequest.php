<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_reject_reason_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApiV30PromotionRejectReasonGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int[] 广告id列表 */
    private ?array $promotionIds = null;
    /** @var string 投放模式，允许值： MANUAL手动投放（默认值） PROCEDURAL自动投放 */
    private ?string $deliveryMode = null;
    /** @var bool 是否需要返回素材legoMid */
    private ?bool $needMaterialLegoMid = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionRejectReasonGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告id列表
     */
    public function promotionIds(array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    /**
     * 投放模式，允许值： MANUAL手动投放（默认值） PROCEDURAL自动投放
     */
    public function deliveryMode(string $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * 是否需要返回素材legoMid
     */
    public function needMaterialLegoMid(bool $needMaterialLegoMid): self
    {
        $this->needMaterialLegoMid = $needMaterialLegoMid;
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
    public function execute(): \Oceanengine\Models\PromotionRejectReasonGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->promotionIds === null) {
            throw new \InvalidArgumentException('promotionIds is required and must be specified');
        }
        if (count($this->promotionIds) < 1) {
            throw new \InvalidArgumentException('promotionIds must have at least 1 elements');
        }
        if (count($this->promotionIds) > 10) {
            throw new \InvalidArgumentException('promotionIds must have less than 10 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['promotion_ids'] = $this->promotionIds;
        if ($this->deliveryMode !== null) {
            $queryParams['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->needMaterialLegoMid !== null) {
            $queryParams['need_material_lego_mid'] = $this->needMaterialLegoMid;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/reject_reason/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionRejectReasonGetV30Response::class);

        return $result['model'];
    }
}
