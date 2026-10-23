<?php

/**
 * 本文件由 go2php 生成，源: api_going_global_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量修改一键出海信息
 */
class ApiOpenApiV30GoingGlobalUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\GoingGlobalUpdateV30Request $goingGlobalUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(GoingGlobalUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function goingGlobalUpdateV30Request(\Oceanengine\Models\GoingGlobalUpdateV30Request $goingGlobalUpdateV30Request): self
    {
        $this->goingGlobalUpdateV30Request = $goingGlobalUpdateV30Request;
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
     * 批量修改一键出海信息
     */
    public function execute(): \Oceanengine\Models\GoingGlobalUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->goingGlobalUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/going_global/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\GoingGlobalUpdateV30Response::class);

        return $result['model'];
    }
}
