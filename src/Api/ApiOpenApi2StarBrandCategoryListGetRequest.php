<?php

/**
 * 本文件由 go2php 生成，源: api_star_brand_category_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星图品牌云图类目列表
 */
class ApiOpenApi2StarBrandCategoryListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $brandId = null;
    private ?array $industry = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarBrandCategoryListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function brandId(int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    public function industry(array $industry): self
    {
        $this->industry = $industry;
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
     * 获取星图品牌云图类目列表
     */
    public function execute(): \Oceanengine\Models\StarBrandCategoryListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->brandId === null) {
            throw new \InvalidArgumentException('brandId is required and must be specified');
        }
        if ($this->industry === null) {
            throw new \InvalidArgumentException('industry is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['brand_id'] = $this->brandId;
        $queryParams['industry'] = $this->industry;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/brand_category/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarBrandCategoryListV2Response::class);

        return $result['model'];
    }
}
