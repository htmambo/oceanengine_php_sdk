<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_get_car_brand_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全量车系信息
 */
class ApiOpenApi2StarDemanderGetCarBrandListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemanderGetCarBrandListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
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
     * 获取全量车系信息
     */
    public function execute(): \Oceanengine\Models\StarDemanderGetCarBrandListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demander/get_car_brand_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemanderGetCarBrandListV2Response::class);

        return $result['model'];
    }
}
