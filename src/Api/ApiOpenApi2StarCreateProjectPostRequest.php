<?php

/**
 * 本文件由 go2php 生成，源: api_star_create_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建星图项目
 */
class ApiOpenApi2StarCreateProjectPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarCreateProjectV2Request $starCreateProjectV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarCreateProjectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starCreateProjectV2Request(\Oceanengine\Models\StarCreateProjectV2Request $starCreateProjectV2Request): self
    {
        $this->starCreateProjectV2Request = $starCreateProjectV2Request;
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
     * 创建星图项目
     */
    public function execute(): \Oceanengine\Models\StarCreateProjectV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starCreateProjectV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/create/project/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarCreateProjectV2Response::class);

        return $result['model'];
    }
}
