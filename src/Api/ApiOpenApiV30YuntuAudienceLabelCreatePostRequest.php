<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_label_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建数据工厂人群标签，支持内容人群标签、商品人群标签、搜索人群标签。
 */
class ApiOpenApiV30YuntuAudienceLabelCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\YuntuAudienceLabelCreateV30Request $yuntuAudienceLabelCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(YuntuAudienceLabelCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function yuntuAudienceLabelCreateV30Request(\Oceanengine\Models\YuntuAudienceLabelCreateV30Request $yuntuAudienceLabelCreateV30Request): self
    {
        $this->yuntuAudienceLabelCreateV30Request = $yuntuAudienceLabelCreateV30Request;
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
     * 创建数据工厂人群标签，支持内容人群标签、商品人群标签、搜索人群标签。
     */
    public function execute(): \Oceanengine\Models\YuntuAudienceLabelCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->yuntuAudienceLabelCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/yuntu/audience_label/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\YuntuAudienceLabelCreateV30Response::class);

        return $result['model'];
    }
}
