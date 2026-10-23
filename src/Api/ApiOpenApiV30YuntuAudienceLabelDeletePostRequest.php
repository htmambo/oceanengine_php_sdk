<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_label_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除当前用户通过 API 接口创建的数据工厂人群标签。
 */
class ApiOpenApiV30YuntuAudienceLabelDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\YuntuAudienceLabelDeleteV30Request $yuntuAudienceLabelDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(YuntuAudienceLabelDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function yuntuAudienceLabelDeleteV30Request(\Oceanengine\Models\YuntuAudienceLabelDeleteV30Request $yuntuAudienceLabelDeleteV30Request): self
    {
        $this->yuntuAudienceLabelDeleteV30Request = $yuntuAudienceLabelDeleteV30Request;
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
     * 删除当前用户通过 API 接口创建的数据工厂人群标签。
     */
    public function execute(): \Oceanengine\Models\YuntuAudienceLabelDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->yuntuAudienceLabelDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/yuntu/audience_label/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\YuntuAudienceLabelDeleteV30Response::class);

        return $result['model'];
    }
}
