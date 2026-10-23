<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_detail_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取广告计划详情（包含创意）
 */
class ApiOpenApiV10QianchuanAdDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $adId = null;
    private ?bool $requestMaterialUrl = null;
    private ?string $version = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdDetailGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    public function requestMaterialUrl(bool $requestMaterialUrl): self
    {
        $this->requestMaterialUrl = $requestMaterialUrl;
        return $this;
    }

    public function version(string $version): self
    {
        $this->version = $version;
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
     * 获取广告计划详情（包含创意）
     */
    public function execute(): \Oceanengine\Models\QianchuanAdDetailGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->adId === null) {
            throw new \InvalidArgumentException('adId is required and must be specified');
        }
        if ($this->adId < 1) {
            throw new \InvalidArgumentException('adId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_id'] = $this->adId;
        if ($this->requestMaterialUrl !== null) {
            $queryParams['request_material_url'] = $this->requestMaterialUrl;
        }
        if ($this->version !== null) {
            $queryParams['version'] = $this->version;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdDetailGetV10Response::class);

        return $result['model'];
    }
}
