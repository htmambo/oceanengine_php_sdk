<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_avatar_submit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 上传广告主头像
 */
class ApiOpenApi2AdvertiserAvatarSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvertiserAvatarSubmitV2Request $advertiserAvatarSubmitV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserAvatarSubmitV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserAvatarSubmitV2Request(\Oceanengine\Models\AdvertiserAvatarSubmitV2Request $advertiserAvatarSubmitV2Request): self
    {
        $this->advertiserAvatarSubmitV2Request = $advertiserAvatarSubmitV2Request;
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
     * 上传广告主头像
     */
    public function execute(): \Oceanengine\Models\AdvertiserAvatarSubmitV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advertiserAvatarSubmitV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/avatar/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserAvatarSubmitV2Response::class);

        return $result['model'];
    }
}
