<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_config_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据商业化行业获取不同行业下对应的资质提交规则。
 * 需注意：每个行业下的资质提交规则可能会因平台及外部监管的要求而发生变化，当规则发生变更时，规则的版本号+1
 */
class ApiOpenApiV30AdvertiserDeliveryPkgConfigGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 一级行业id */
    private ?int $firstIndustryId = null;
    /** @var int 二级行业id */
    private ?int $secondIndustryId = null;
    /** @var int 三级行业id */
    private ?int $thirdIndustryId = null;
    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserDeliveryPkgConfigV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 一级行业id
     */
    public function firstIndustryId(int $firstIndustryId): self
    {
        $this->firstIndustryId = $firstIndustryId;
        return $this;
    }

    /**
     * 二级行业id
     */
    public function secondIndustryId(int $secondIndustryId): self
    {
        $this->secondIndustryId = $secondIndustryId;
        return $this;
    }

    /**
     * 三级行业id
     */
    public function thirdIndustryId(int $thirdIndustryId): self
    {
        $this->thirdIndustryId = $thirdIndustryId;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * 根据商业化行业获取不同行业下对应的资质提交规则。
     */
    public function execute(): \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30Response
    {
        if ($this->firstIndustryId === null) {
            throw new \InvalidArgumentException('firstIndustryId is required and must be specified');
        }
        if ($this->secondIndustryId === null) {
            throw new \InvalidArgumentException('secondIndustryId is required and must be specified');
        }
        if ($this->thirdIndustryId === null) {
            throw new \InvalidArgumentException('thirdIndustryId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        $queryParams['first_industry_id'] = $this->firstIndustryId;
        $queryParams['second_industry_id'] = $this->secondIndustryId;
        $queryParams['third_industry_id'] = $this->thirdIndustryId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/delivery_pkg_config/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30Response::class);

        return $result['model'];
    }
}
