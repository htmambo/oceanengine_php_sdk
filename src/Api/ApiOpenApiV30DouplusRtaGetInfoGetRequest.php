<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_rta_get_info_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询客户获取RTA策略信息与数据
 */
class ApiOpenApiV30DouplusRtaGetInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $awemeSecUid = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusRtaGetInfoV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function awemeSecUid(string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
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
     * 查询客户获取RTA策略信息与数据
     */
    public function execute(): \Oceanengine\Models\DouplusRtaGetInfoV30Response
    {
        if ($this->awemeSecUid === null) {
            throw new \InvalidArgumentException('awemeSecUid is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['aweme_sec_uid'] = $this->awemeSecUid;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/rta/get_info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusRtaGetInfoV30Response::class);

        return $result['model'];
    }
}
