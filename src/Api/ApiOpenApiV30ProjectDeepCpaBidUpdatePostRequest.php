<?php

/**
 * 本文件由 go2php 生成，源: api_project_deep_cpa_bid_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持通过本接口批量修改项目维度出价（deep_cpa_bid），支持修改深层出价
 */
class ApiOpenApiV30ProjectDeepCpaBidUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectDeepCpaBidUpdateV30Request $projectDeepCpaBidUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectDeepCpaBidUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectDeepCpaBidUpdateV30Request(\Oceanengine\Models\ProjectDeepCpaBidUpdateV30Request $projectDeepCpaBidUpdateV30Request): self
    {
        $this->projectDeepCpaBidUpdateV30Request = $projectDeepCpaBidUpdateV30Request;
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
     * 支持通过本接口批量修改项目维度出价（deep_cpa_bid），支持修改深层出价
     */
    public function execute(): \Oceanengine\Models\ProjectDeepCpaBidUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectDeepCpaBidUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project/deep_cpa_bid/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectDeepCpaBidUpdateV30Response::class);

        return $result['model'];
    }
}
