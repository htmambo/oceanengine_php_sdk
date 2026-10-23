<?php

/**
 * 本文件由 go2php 生成，源: api_local_promotion_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 拉取广告详情数据
 */
class ApiOpenApiV30LocalPromotionDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $localAccountId = null;
    /** @var int 广告ID */
    private ?int $promotionId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalPromotionDetailV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 广告ID
     */
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
     * 拉取广告详情数据
     */
    public function execute(): \Oceanengine\Models\LocalPromotionDetailV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->localAccountId < 1) {
            throw new \InvalidArgumentException('localAccountId must be greater than 1');
        }
        if ($this->promotionId === null) {
            throw new \InvalidArgumentException('promotionId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['promotion_id'] = $this->promotionId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/promotion/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalPromotionDetailV30Response::class);

        return $result['model'];
    }
}
