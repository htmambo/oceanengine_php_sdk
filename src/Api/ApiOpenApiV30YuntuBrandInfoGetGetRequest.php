<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_brand_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取服务品牌的虚拟 adv 信息、行业信息、用户名称。
 */
class ApiOpenApiV30YuntuBrandInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 云图品牌ID */
    private ?int $yuntuBrandId = null;
    /** @var int 服务商ID */
    private ?int $serviceProviderId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(YuntuBrandInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 云图品牌ID
     */
    public function yuntuBrandId(int $yuntuBrandId): self
    {
        $this->yuntuBrandId = $yuntuBrandId;
        return $this;
    }

    /**
     * 服务商ID
     */
    public function serviceProviderId(int $serviceProviderId): self
    {
        $this->serviceProviderId = $serviceProviderId;
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
     * 获取服务品牌的虚拟 adv 信息、行业信息、用户名称。
     */
    public function execute(): \Oceanengine\Models\YuntuBrandInfoGetV30Response
    {
        if ($this->yuntuBrandId === null) {
            throw new \InvalidArgumentException('yuntuBrandId is required and must be specified');
        }
        if ($this->serviceProviderId === null) {
            throw new \InvalidArgumentException('serviceProviderId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['yuntu_brand_id'] = $this->yuntuBrandId;
        $queryParams['service_provider_id'] = $this->serviceProviderId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/yuntu/brand_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\YuntuBrandInfoGetV30Response::class);

        return $result['model'];
    }
}
