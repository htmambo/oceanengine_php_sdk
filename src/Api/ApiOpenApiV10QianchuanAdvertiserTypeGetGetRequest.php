<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_advertiser_type_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 最多20个
 */
class ApiOpenApiV10QianchuanAdvertiserTypeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $advertiserIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdvertiserTypeGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
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
     * 最多20个
     */
    public function execute(): \Oceanengine\Models\QianchuanAdvertiserTypeGetV10Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/advertiser/type/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdvertiserTypeGetV10Response::class);

        return $result['model'];
    }
}
