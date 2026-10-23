<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_info_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建自定义人群包
 */
class ApiOpenApiV30YuntuAudienceInfoCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\YuntuAudienceInfoCreateV30Request $yuntuAudienceInfoCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(YuntuAudienceInfoCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function yuntuAudienceInfoCreateV30Request(\Oceanengine\Models\YuntuAudienceInfoCreateV30Request $yuntuAudienceInfoCreateV30Request): self
    {
        $this->yuntuAudienceInfoCreateV30Request = $yuntuAudienceInfoCreateV30Request;
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
     * 创建自定义人群包
     */
    public function execute(): \Oceanengine\Models\YuntuAudienceInfoCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->yuntuAudienceInfoCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/yuntu/audience_info/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\YuntuAudienceInfoCreateV30Response::class);

        return $result['model'];
    }
}
