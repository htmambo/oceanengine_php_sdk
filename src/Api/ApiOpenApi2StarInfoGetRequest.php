<?php

/**
 * 本文件由 go2php 生成，源: api_star_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商获取星图客户全量信息
 */
class ApiOpenApi2StarInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $starIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarInfoV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starIds(array $starIds): self
    {
        $this->starIds = $starIds;
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
     * 代理商获取星图客户全量信息
     */
    public function execute(): \Oceanengine\Models\StarInfoV2Response
    {
        if ($this->starIds === null) {
            throw new \InvalidArgumentException('starIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_ids'] = $this->starIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarInfoV2Response::class);

        return $result['model'];
    }
}
