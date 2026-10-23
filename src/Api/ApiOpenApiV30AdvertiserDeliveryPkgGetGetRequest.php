<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于查询广告主以推广产品形式提交的投放资质，可以获取到资质审核状态等信息
 */
class ApiOpenApiV30AdvertiserDeliveryPkgGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主账户ID */
    private ?int $advertiserId = null;
    /** @var int 推广产品组id，是推广产品的组标识 */
    private ?int $pkgId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserDeliveryPkgGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 推广产品组id，是推广产品的组标识
     */
    public function pkgId(int $pkgId): self
    {
        $this->pkgId = $pkgId;
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
     * 用于查询广告主以推广产品形式提交的投放资质，可以获取到资质审核状态等信息
     */
    public function execute(): \Oceanengine\Models\AdvertiserDeliveryPkgGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->pkgId === null) {
            throw new \InvalidArgumentException('pkgId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['pkg_id'] = $this->pkgId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/delivery_pkg/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserDeliveryPkgGetV30Response::class);

        return $result['model'];
    }
}
