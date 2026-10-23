<?php

/**
 * 本文件由 go2php 生成，源: api_serve_market_cid_verify_token_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口用于校验首次Cid回传数据，校验token是否可用场景，不可用于业务系统
 */
class ApiOpenApiV10ServeMarketCidVerifyTokenGetRequest
{
    private \Oceanengine\ApiClient $apiClient;


    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ServeMarketCidVerifyTokenV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
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
     * 该接口用于校验首次Cid回传数据，校验token是否可用场景，不可用于业务系统
     */
    public function execute(): \Oceanengine\Models\ServeMarketCidVerifyTokenV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/serve_market/cid/verify_token/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ServeMarketCidVerifyTokenV10Response::class);

        return $result['model'];
    }
}
