<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_adv_bind_group_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查找账户绑定工作台组织
 */
class ApiOpenApiV30EbpAdvBindGroupGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 查询组织层级方式 */
    private ?string $queryType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpAdvBindGroupGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 查询组织层级方式
     */
    public function queryType(string $queryType): self
    {
        $this->queryType = $queryType;
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
     * 查找账户绑定工作台组织
     */
    public function execute(): \Oceanengine\Models\EbpAdvBindGroupGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->queryType === null) {
            throw new \InvalidArgumentException('queryType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['query_type'] = $this->queryType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ebp/adv_bind_group/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpAdvBindGroupGetV30Response::class);

        return $result['model'];
    }
}
