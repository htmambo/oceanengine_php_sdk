<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_project_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 2.0项目批量更新否定词
 */
class ApiOpenApiV30ToolsPrivativeWordProjectUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30Request $toolsPrivativeWordProjectUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPrivativeWordProjectUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPrivativeWordProjectUpdateV30Request(\Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30Request $toolsPrivativeWordProjectUpdateV30Request): self
    {
        $this->toolsPrivativeWordProjectUpdateV30Request = $toolsPrivativeWordProjectUpdateV30Request;
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
     * 2.0项目批量更新否定词
     */
    public function execute(): \Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPrivativeWordProjectUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/privative_word/project/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPrivativeWordProjectUpdateV30Response::class);

        return $result['model'];
    }
}
