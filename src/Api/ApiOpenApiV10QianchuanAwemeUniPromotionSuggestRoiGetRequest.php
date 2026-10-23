<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_suggest_roi_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取随心推全域手动出价计划建议ROI
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionSuggestRoiGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    private ?int $productId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionSuggestRoiV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function productId(int $productId): self
    {
        $this->productId = $productId;
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
     * 获取随心推全域手动出价计划建议ROI
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionSuggestRoiV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->awemeId < 1) {
            throw new \InvalidArgumentException('awemeId must be greater than 1');
        }
        if ($this->productId === null) {
            throw new \InvalidArgumentException('productId is required and must be specified');
        }
        if ($this->productId < 1) {
            throw new \InvalidArgumentException('productId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['product_id'] = $this->productId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/suggest/roi/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionSuggestRoiV10Response::class);

        return $result['model'];
    }
}
