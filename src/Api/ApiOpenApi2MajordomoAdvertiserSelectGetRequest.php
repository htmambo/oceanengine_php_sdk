<?php

/**
 * 本文件由 go2php 生成，源: api_majordomo_advertiser_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取纵横组织下的广告主ID列表
 */
class ApiOpenApi2MajordomoAdvertiserSelectGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织id */
    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(MajordomoAdvertiserSelectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 组织id
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
     * 获取纵横组织下的广告主ID列表
     */
    public function execute(): \Oceanengine\Models\MajordomoAdvertiserSelectV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/majordomo/advertiser/select/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\MajordomoAdvertiserSelectV2Response::class);

        return $result['model'];
    }
}
