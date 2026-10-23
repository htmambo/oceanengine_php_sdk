<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_brand_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据真实的客户adv_id 获取有权限的云图品牌列表信息，信息包括：品牌id、品牌名称、虚拟advid
 */
class ApiOpenApi2DmpBrandGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 真实的可鉴权的adv_id */
    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpBrandGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 真实的可鉴权的adv_id
     */
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
     * 根据真实的客户adv_id 获取有权限的云图品牌列表信息，信息包括：品牌id、品牌名称、虚拟advid
     */
    public function execute(): \Oceanengine\Models\DmpBrandGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/brand/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpBrandGetV2Response::class);

        return $result['model'];
    }
}
