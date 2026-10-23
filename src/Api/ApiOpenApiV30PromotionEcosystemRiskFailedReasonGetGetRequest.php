<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_ecosystem_risk_failed_reason_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取单元下素材生态风险判定建议
 */
class ApiOpenApiV30PromotionEcosystemRiskFailedReasonGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $promotionId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionEcosystemRiskFailedReasonGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function promotionId(int $promotionId): self
    {
        $this->promotionId = $promotionId;
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
     * 获取单元下素材生态风险判定建议
     */
    public function execute(): \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->promotionId === null) {
            throw new \InvalidArgumentException('promotionId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['promotion_id'] = $this->promotionId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/ecosystem_risk_failed_reason/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30Response::class);

        return $result['model'];
    }
}
