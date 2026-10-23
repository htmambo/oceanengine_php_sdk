<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询自定义人群包
 */
class ApiOpenApiV30YuntuAudienceInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 品牌id */
    private ?int $yuntuBrandId = null;
    /** @var int 服务商id */
    private ?int $serviceProviderId = null;
    /** @var int 广告主ID，即品牌虚拟adv_id */
    private ?int $advertiserId = null;
    /** @var int 人群包ID */
    private ?int $customAudienceId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(YuntuAudienceInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 品牌id
     */
    public function yuntuBrandId(int $yuntuBrandId): self
    {
        $this->yuntuBrandId = $yuntuBrandId;
        return $this;
    }

    /**
     * 服务商id
     */
    public function serviceProviderId(int $serviceProviderId): self
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * 广告主ID，即品牌虚拟adv_id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 人群包ID
     */
    public function customAudienceId(int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
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
     * 查询自定义人群包
     */
    public function execute(): \Oceanengine\Models\YuntuAudienceInfoGetV30Response
    {
        if ($this->yuntuBrandId === null) {
            throw new \InvalidArgumentException('yuntuBrandId is required and must be specified');
        }
        if ($this->serviceProviderId === null) {
            throw new \InvalidArgumentException('serviceProviderId is required and must be specified');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->customAudienceId === null) {
            throw new \InvalidArgumentException('customAudienceId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['yuntu_brand_id'] = $this->yuntuBrandId;
        $queryParams['service_provider_id'] = $this->serviceProviderId;
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['custom_audience_id'] = $this->customAudienceId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/yuntu/audience_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\YuntuAudienceInfoGetV30Response::class);

        return $result['model'];
    }
}
