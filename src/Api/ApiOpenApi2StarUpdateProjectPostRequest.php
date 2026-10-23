<?php

/**
 * 本文件由 go2php 生成，源: api_star_update_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改星图项目
 */
class ApiOpenApi2StarUpdateProjectPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarUpdateProjectV2Request $starUpdateProjectV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarUpdateProjectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starUpdateProjectV2Request(\Oceanengine\Models\StarUpdateProjectV2Request $starUpdateProjectV2Request): self
    {
        $this->starUpdateProjectV2Request = $starUpdateProjectV2Request;
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
     * 修改星图项目
     */
    public function execute(): \Oceanengine\Models\StarUpdateProjectV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starUpdateProjectV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/update/project/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarUpdateProjectV2Response::class);

        return $result['model'];
    }
}
