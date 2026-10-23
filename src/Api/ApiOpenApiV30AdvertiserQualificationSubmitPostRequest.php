<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_qualification_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 提交广告主资质信息为全量接口。更新的时候需要全量先获取所有资质，然后更新相应资质。
 */
class ApiOpenApiV30AdvertiserQualificationSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvertiserQualificationSubmitV30Request $advertiserQualificationSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserQualificationSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserQualificationSubmitV30Request(\Oceanengine\Models\AdvertiserQualificationSubmitV30Request $advertiserQualificationSubmitV30Request): self
    {
        $this->advertiserQualificationSubmitV30Request = $advertiserQualificationSubmitV30Request;
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
     * 提交广告主资质信息为全量接口。更新的时候需要全量先获取所有资质，然后更新相应资质。
     */
    public function execute(): \Oceanengine\Models\AdvertiserQualificationSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advertiserQualificationSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/qualification/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserQualificationSubmitV30Response::class);

        return $result['model'];
    }
}
