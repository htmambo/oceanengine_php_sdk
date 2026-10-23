<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_material_suggestion_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取计划下素材审核建议
 */
class ApiOpenApiV10QianchuanAdMaterialSuggestionGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 请求计划id */
    private ?int $adId = null;
    /** @var int[] 请求素材id数组 */
    private ?array $materialIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdMaterialSuggestionV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 请求计划id
     */
    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 请求素材id数组
     */
    public function materialIds(array $materialIds): self
    {
        $this->materialIds = $materialIds;
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
     * 获取计划下素材审核建议
     */
    public function execute(): \Oceanengine\Models\QianchuanAdMaterialSuggestionV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->adId === null) {
            throw new \InvalidArgumentException('adId is required and must be specified');
        }
        if ($this->materialIds === null) {
            throw new \InvalidArgumentException('materialIds is required and must be specified');
        }
        if (count($this->materialIds) < 1) {
            throw new \InvalidArgumentException('materialIds must have at least 1 elements');
        }
        if (count($this->materialIds) > 50) {
            throw new \InvalidArgumentException('materialIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_id'] = $this->adId;
        $queryParams['material_ids'] = $this->materialIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/material/suggestion/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdMaterialSuggestionV10Response::class);

        return $result['model'];
    }
}
