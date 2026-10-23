<?php

/**
 * 本文件由 go2php 生成，源: api_user_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取授权user信息
 */
class ApiOpenApi2UserInfoGetRequest
{
    private \Oceanengine\ApiClient $apiClient;


    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UserInfoV2ApiService $service)
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
     * 获取授权user信息
     */
    public function execute(): \Oceanengine\Models\UserInfoV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/user/info/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UserInfoV2Response::class);

        return $result['model'];
    }
}
