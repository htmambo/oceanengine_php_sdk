<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_project_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 2.0快投项目添加否定词
 */
class ApiOpenApiV30ToolsPrivativeWordProjectAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPrivativeWordProjectAddV30Request $toolsPrivativeWordProjectAddV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPrivativeWordProjectAddV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPrivativeWordProjectAddV30Request(\Oceanengine\Models\ToolsPrivativeWordProjectAddV30Request $toolsPrivativeWordProjectAddV30Request): self
    {
        $this->toolsPrivativeWordProjectAddV30Request = $toolsPrivativeWordProjectAddV30Request;
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
     * 2.0快投项目添加否定词
     */
    public function execute(): \Oceanengine\Models\ToolsPrivativeWordProjectAddV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPrivativeWordProjectAddV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/privative_word/project/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPrivativeWordProjectAddV30Response::class);

        return $result['model'];
    }
}
