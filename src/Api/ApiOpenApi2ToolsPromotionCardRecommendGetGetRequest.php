<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_card_recommend_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsPromotionCardRecommendGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $adId = null;
    private ?string $advancedCreativeType = null;
    private ?int $advertiserId = null;
    private ?string $downloadType = null;
    private ?string $recommendType = null;
    private ?array $titleList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPromotionCardRecommendGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    public function advancedCreativeType(string $advancedCreativeType): self
    {
        $this->advancedCreativeType = $advancedCreativeType;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function downloadType(string $downloadType): self
    {
        $this->downloadType = $downloadType;
        return $this;
    }

    public function recommendType(string $recommendType): self
    {
        $this->recommendType = $recommendType;
        return $this;
    }

    public function titleList(array $titleList): self
    {
        $this->titleList = $titleList;
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
    public function execute(): \Oceanengine\Models\ToolsPromotionCardRecommendGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->adId !== null) {
            $queryParams['ad_id'] = $this->adId;
        }
        if ($this->advancedCreativeType !== null) {
            $queryParams['advanced_creative_type'] = $this->advancedCreativeType;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->downloadType !== null) {
            $queryParams['download_type'] = $this->downloadType;
        }
        if ($this->recommendType !== null) {
            $queryParams['recommend_type'] = $this->recommendType;
        }
        if ($this->titleList !== null) {
            $__encoded0 = json_encode($this->titleList);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: titleList');
            }
            $queryParams['title_list'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/promotion_card/recommend/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPromotionCardRecommendGetV2Response::class);

        return $result['model'];
    }
}
