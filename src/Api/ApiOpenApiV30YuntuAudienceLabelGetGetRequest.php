<?php

/**
 * 本文件由 go2php 生成，源: api_yuntu_audience_label_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除当前用户通过 API 接口创建的数据工厂人群标签。
 */
class ApiOpenApiV30YuntuAudienceLabelGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $yuntuBrandId = null;
    private ?int $serviceProviderId = null;
    private ?int $labelId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(YuntuAudienceLabelGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function yuntuBrandId(int $yuntuBrandId): self
    {
        $this->yuntuBrandId = $yuntuBrandId;
        return $this;
    }

    public function serviceProviderId(int $serviceProviderId): self
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    public function labelId(int $labelId): self
    {
        $this->labelId = $labelId;
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
    public function execute(): \Oceanengine\Models\YuntuAudienceLabelGetV30Response
    {
        if ($this->yuntuBrandId === null) {
            throw new \InvalidArgumentException('yuntuBrandId is required and must be specified');
        }
        if ($this->serviceProviderId === null) {
            throw new \InvalidArgumentException('serviceProviderId is required and must be specified');
        }
        if ($this->labelId === null) {
            throw new \InvalidArgumentException('labelId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['yuntu_brand_id'] = $this->yuntuBrandId;
        $queryParams['service_provider_id'] = $this->serviceProviderId;
        $queryParams['label_id'] = $this->labelId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/yuntu/audience_label/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\YuntuAudienceLabelGetV30Response::class);

        return $result['model'];
    }
}
