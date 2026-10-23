<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_card_recommend_title_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取推广卡片推荐文案列表
 */
class ApiOpenApi2ToolsPromotionCardRecommendTitleGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $adId = null;
    private ?int $advertiserId = null;
    private ?string $contentType = null;
    private ?string $externalUrl = null;
    private ?int $industryId = null;
    private ?string $textType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPromotionCardRecommendTitleGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function contentType(string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function externalUrl(string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    public function industryId(int $industryId): self
    {
        $this->industryId = $industryId;
        return $this;
    }

    public function textType(string $textType): self
    {
        $this->textType = $textType;
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
     * 用于获取推广卡片推荐文案列表
     */
    public function execute(): \Oceanengine\Models\ToolsPromotionCardRecommendTitleGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->adId !== null) {
            $queryParams['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->contentType !== null) {
            $queryParams['content_type'] = $this->contentType;
        }
        if ($this->externalUrl !== null) {
            $queryParams['external_url'] = $this->externalUrl;
        }
        if ($this->industryId !== null) {
            $queryParams['industry_id'] = $this->industryId;
        }
        if ($this->textType !== null) {
            $queryParams['text_type'] = $this->textType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/promotion_card/recommend_title/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPromotionCardRecommendTitleGetV2Response::class);

        return $result['model'];
    }
}
