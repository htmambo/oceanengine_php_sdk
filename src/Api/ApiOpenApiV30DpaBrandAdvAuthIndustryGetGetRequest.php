<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_brand_adv_auth_industry_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取广告账户可投品牌行业信息，目前支持查询云图品牌行业
 */
class ApiOpenApiV30DpaBrandAdvAuthIndustryGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $accountId = null;
    /** @var \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30OriginReq 品牌请求参数 */
    private ?\Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30OriginReq $originReq = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaBrandAdvAuthIndustryGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 品牌请求参数
     */
    public function originReq(\Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30OriginReq $originReq): self
    {
        $this->originReq = $originReq;
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
     * 获取广告账户可投品牌行业信息，目前支持查询云图品牌行业
     */
    public function execute(): \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->originReq === null) {
            throw new \InvalidArgumentException('originReq is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $__encoded0 = json_encode($this->originReq);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: originReq');
            }
            $queryParams['origin_req'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/brand/adv_auth/industry/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaBrandAdvAuthIndustryGetV30Response::class);

        return $result['model'];
    }
}
