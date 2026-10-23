<?php

/**
 * 本文件由 go2php 生成，源: api_std_project_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新标准项目
 */
class ApiOpenApiV30StdProjectUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StdProjectUpdateV30Request $stdProjectUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StdProjectUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stdProjectUpdateV30Request(\Oceanengine\Models\StdProjectUpdateV30Request $stdProjectUpdateV30Request): self
    {
        $this->stdProjectUpdateV30Request = $stdProjectUpdateV30Request;
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
     * 更新标准项目
     */
    public function execute(): \Oceanengine\Models\StdProjectUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stdProjectUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/std_project/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StdProjectUpdateV30Response::class);

        return $result['model'];
    }
}
